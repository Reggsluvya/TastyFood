<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'UserHome'])->name('home');
Route::get('/tentang', [UserController::class, 'tentang'])->name('tentang');
Route::get('/detailBerita/{id}', [UserController::class, 'detailBerita'])->name('detailBerita');
Route::get('/berita', [UserController::class, 'berita'])->name('berita');
Route::get('/galeri', [UserController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [UserController::class, 'kontak'])->name('kontak');

// super admin

Route::get('/homeSuper', [SuperController::class, 'homeSuper'])->name('homeSuper');
Route::get('/kelolaAkun', [SuperController::class, 'kelolaAkun'])->name('kelolaAkun');
Route::get('/editAkun/{id}', [SuperController::class, 'editAkun'])->name('editAkun');
Route::get('/tambahAkun', [SuperController::class, 'tambahAkun'])->name('tambahAkun');
Route::get('/hapusAkun/{id}', [SuperController::class, 'hapusAkun'])->name('hapusAkun');

// admin

Route::get('/homeAdmin', [AdminController::class, 'homeAdmin'])->name('homeAdmin');
Route::get('/dashGaleri', [AdminController::class, 'dashGaleri'])->name('dashGaleri');
Route::get('/tambahGaleri', [AdminController::class, 'tambahGaleri'])->name('tambahGaleri');
Route::get('/editGaleri/{id}', [AdminController::class, 'editGaleri'])->name('editGaleri');
Route::get('/hapusGaleri/{id}', [AdminController::class, 'hapusGaleri'])->name('hapusGaleri');
Route::get('/dashberita', [AdminController::class, 'dashberita'])->name('dashberita');
Route::get('/editBerita/{id}', [AdminController::class, 'editBerita'])->name('editBerita');
Route::get('/tambahBerita', [AdminController::class, 'tambahBerita'])->name('tambahBerita');
Route::get('/hapusBerita/{id}', [AdminController::class, 'hapusBerita'])->name('hapusBerita');
Route::get('/dashpesan', [AdminController::class, 'dashpesan'])->name('dashpesan');
Route::get('/editPesan', [AdminController::class, 'editpesan'])->name('editpesan');
Route::get('/hapusPesan/{id}', [AdminController::class, 'hapusPesan'])->name('hapusPesan');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/Maps', [AdminController::class, 'koordinatMaps'])->name('Maps');
Route::get('/dashTentang', [AdminController::class, 'dashTentang'])->name('dashTentang');
Route::get('/editTentang/{id}', [AdminController::class, 'editTentang'])->name('editTentang');
Route::get('/hapusTentang/{id}', [AdminController::class, 'hapusTentang'])->name('hapusTentang');
Route::get('/dashKontak', [AdminController::class, 'dashKontak'])->name('dashKontak');
Route::get('/editKontak/{id}', [AdminController::class, 'editKontak'])->name('editKontak');
Route::get('/hapusKontak/{id}', [AdminController::class, 'hapusKontak'])->name('hapusKontak');
Route::get('/editProfil/{id}', [AdminController::class, 'editProfil'])->name('editProfil');

// post

Route::post('/postTambahGaleri', [AdminController::class, 'postTambahGaleri'])->name('postTambahGaleri');
Route::post('/postEditGaleri/{id}', [AdminController::class, 'postEditGaleri'])->name('postEditGaleri');
Route::post('/postTambahBerita', [AdminController::class, 'postTambahBerita'])->name('postTambahBerita');
Route::post('/postEditBerita/{id}', [AdminController::class, 'postEditBerita'])->name('postEditBerita');
Route::post('/pesan', [UserController::class, 'pesan'])->name('pesan');
Route::post('/postEditPesan', [AdminController::class, 'postEditPesan'])->name('postEditPesan');
Route::post('/postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::post('/postEditAkun/{id}', [SuperController::class, 'postEditAkun'])->name('postEditAkun');
Route::post('/postTambahAkun', [SuperController::class, 'postTambahAkun'])->name('postTambahAkun');
Route::post('/editKoordinatMaps', [AdminController::class, 'editKoordinatMaps'])->name('editKoordinatMaps');
Route::post('/postEditTentang/{id}', [AdminController::class, 'postEditTentang'])->name('postEditTentang');
Route::post('/postEditKontak/{id}', [AdminController::class, 'postEditKontak'])->name('postEditKontak');
Route::post('/postEditProfil/{id}', [AdminController::class, 'postEditProfil'])->name('postEditProfil');