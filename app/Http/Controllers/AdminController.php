<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\galeri;
use App\Models\kontakKami;
use App\Models\maps;
use App\Models\pesan;
use App\Models\tentangKami;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function homeAdmin()
    {
        $galericount = galeri::all()->count();
        $beritacount = berita::all()->count();
        $pesancount = pesan::all()->count();
        $user = Auth::user();
        return view('admin.homeAdmin', compact('galericount', 'pesancount', 'beritacount', 'user'));
    }

    public function dashBerita()
    {
        $beritacount = berita::all()->count();
        $berita = berita::all();

        return view('admin.dashBerita', compact('beritacount', 'berita'));
    }

    public function editBerita($id)
    {
        $berita = berita::findOrFail($id);

        return view('admin.editBerita', compact('berita'));
    }

    public function tambahBerita()
    {
        return view('admin.tambahBerita');
    }

    public function dashGaleri()
    {
        $galericount = galeri::all()->count();
        $galeri = galeri::all();

        return view('admin.dashGaleri', compact('galericount', 'galeri'));
    }

    public function tambahGaleri()
    {
        return view('admin.tambahGaleri');
    }

    public function editGaleri($id)
    {
        $galeri = galeri::findOrFail($id);

        return view('admin.editGaleri', compact('galeri'));
    }

    public function dashpesan()
    {
        $pesancount = pesan::all()->count();
        $pesan = pesan::all();

        return view('admin.dashpesan', compact('pesancount', 'pesan'));
    }

    public function editPesan()
    {
        return view('admin.editPesan');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homeUser')->with('success', 'Berhasil logout.');
    }

    public function postLogin(Request $request, User $user)
    {
        $data = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->role == 'Admin') {
                return redirect()->route('homeAdmin')->with('success', 'Selamat Datang, ' . $user->name);
            } elseif ($user->role == 'SuperAdmin') {
                return redirect()->route('homeSuper')->with('success', 'Selamat Datang, ' . $user->name);
            }
        }
        return redirect()->route('login')->with('error', 'Email atau Password Salah!');
    }

    public function postTambahBerita(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
            'berita' => 'required',
        ]);

        $berita = new berita();
        $berita->gambar = $request->gambar->store('img');
        $berita->judul = $request->judul;
        $berita->berita = $request->berita;
        $berita->save();

        return redirect()->route('dashberita')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function postEditBerita(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'berita' => 'required',
        ]);

        $berita = berita::findOrFail($id);
        $berita->update([
            'judul' => $request->judul,
            'gambar' => $request->gambar->store('img'),
            'berita' => $request->berita
        ]);

        return redirect()->route('dashberita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function hapusBerita($id)
    {
        $berita = berita::find($id);

        if ($berita) {
            $berita->delete();
            return redirect()->route('dashberita')->with('success', 'Berita berhasil dihapus.');
        }

        return redirect()->route('dashBerita')->with('error', 'Berita gagal dihapus.');
    }

    public function postTambahGaleri(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $galeri = new galeri();
        $galeri->gambar = $request->gambar->store('img');
        $galeri->save();

        return redirect()->route('dashGaleri')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function postEditGaleri(Request $request, $id)
    {
        $data = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $galeri = galeri::findOrFail($id);
        $galeri->update([
            'gambar' => $request->gambar->store('img')
        ]);

        return redirect()->route('dashGaleri')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function hapusGaleri($id)
    {
        $galeri = galeri::find($id);

        if ($galeri) {
            $galeri->delete();
            return redirect()->route('dashGaleri')->with('success', 'Galeri berhasil dihapus.');
        }

        return redirect()->route('dashGaleri')->with('error', 'Galeri gagal dihapus.');
    }

    public function postEditPesan($id, Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $pesan = pesan::findOrFail($id);
        $pesan->update([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->route('dashpesan')->with('success', 'Pesan berhasil diperbarui.');
    }

    public function hapusPesan($id)
    {
        $pesan = pesan::find($id);

        if ($pesan) {
            $pesan->delete();
            return redirect()->route('dashpesan')->with('success', 'Pesan berhasil dihapus.');
        }

        return redirect()->route('dashpesan')->with('error', 'Pesan gagal dihapus.');
    }

    public function koordinatMaps()
    {
        $coordinates = maps::first();

        return view('admin.Maps', compact('coordinates'));
    }

    public function editKoordinatMaps(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $coordinates = Maps::first();
        $coordinates->latitude = $request->latitude;
        $coordinates->longitude = $request->longitude;
        $coordinates->save();

        return redirect()->route('Maps')->with('success', 'Koordinat berhasil diperbarui.');
    }

    public function dashTentang()
    {
        $tentang = tentangKami::all();

        return view('admin.dashTentang', compact('tentang'));
    }

    public function editTentang($id)
    {
        $tentang = tentangKami::find($id);

        return view('admin.editTentang', compact('tentang'));
    }

    public function postEditTentang(Request $request, $id)
    {
        $data = $request->validate([
            'tentang' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $tentang = tentangKami::find($id);
        $tentang->update([
            'tentang' => $request->tentang,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('dashTentang')->with('success', 'Tentang Kami berhasil diperbarui.');
    }

    public function hapusTentang($id)
    {
        $tentang = tentangKami::find($id);

        if ($tentang) {
            $tentang->delete();
            return redirect()->route('dashTentang')->with('success', 'Tentang Kami berhasil dihapus.');
        }

        return redirect()->route('dashTentang')->with('error', 'Tentang Kami gagal dihapus.');
    }

    public function dashKontak()
    {
        $kontak = kontakKami::all();

        return view('admin.dashKontak', compact('kontak'));
    }

    public function editKontak($id)
    {
        $kontak = kontakKami::find($id);

        return view('admin.editKontak', compact('kontak'));
    }

    public function postEditKontak(Request $request, $id)
    {
        $data = $request->validate([
            'alamat' => 'required',
            'noHp' => 'required',
            'email' => 'required',
        ]);

        $kontak = kontakKami::find($id);
        $kontak->update([
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'email' => $request->email,
        ]);

        return redirect()->route('dashKontak')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function hapusKontak($id)
    {
        $kontak = kontakKami::find($id);

        if ($kontak) {
            $kontak->delete();
            return redirect()->route('dashKontak')->with('success', 'Kontak berhasil dihapus.');
        }

        return redirect()->route('dashKontak')->with('error', 'Kontak gagal dihapus.');
    }

    function editProfil($id)
    {
        $user = User::find($id);
        return view('admin.editProfil', compact('user'));
    }

    public function postEditProfil(Request $request, $id)
    {
        // Validasi data input
        $data = $request->validate([
            'profil' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
            'nama' => 'required',                               
            'email' => 'required|email',                        
            'password' => 'nullable|confirmed',                 
            'role' => 'required',                               
        ]);

        $user = User::findOrFail($id);
        $user->nama = $data['nama'];
        $user->email = $data['email'];
        if ($request->filled('password')) {
            $user->password = bcrypt($data['password']);
        }
        $user->role = $data['role'];
        if ($request->hasFile('profil')) {
            $user->profil = $request->file('profil')->store('img');
        }
        $user->save();
        return redirect()->route('homeAdmin')->with('success', 'Akun berhasil diupdate');
    }
}
