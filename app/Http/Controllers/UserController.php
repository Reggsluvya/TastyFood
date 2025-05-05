<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\galeri;
use App\Models\kontak;
use App\Models\kontakKami;
use App\Models\maps;
use App\Models\pesan;
use App\Models\tentangKami;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function UserHome(){
        $berita = berita::skip(1)->take(4)->get();
        $bs = berita::take(1)->get();
        $galeri = galeri::take(6)->get();

        return view('User.UserHome', compact('berita', 'bs', 'galeri'));
    }
    public function tentang(){
        $tentang = tentangKami::first();

        return view('User.tetang', compact('tentang'));
    }
    public function berita(){
        $bs = berita::skip(5)->take(1)->get();
        $berita = berita::take(4)->get();

        $sortBerita = $berita->sortBy(function ($item): bool|int|string {
            $order = [2, 3, 4, 5];
            return array_search($item->id, $order);
        });
        return view('User.berita', compact('berita', 'bs', 'sortBerita'));
    }
    public function galeri(){
        $g = galeri::skip(6)->take(12)->get();
        $cr = galeri::take(3)->get();

        $sortCr = $cr->sortBy( function ($item){
            $order = [2, 3, 1];

            return array_search($item->id, $order);
        });
        
        return view('User.galeri', compact('g', 'cr'));
    }

    public function detailBerita($id){
        $b = berita::findOrFail($id);
        $beritaTerkait = berita::where('id','!=', $id)->take(4)->get();

        return view('User.detailBerita', compact('b', 'beritaTerkait'));
    }
    public function kontak(){
        $coordinates = maps::find(1);
        $kontak = kontakKami::all();

        return view( 'User.kontak', compact('coordinates', 'kontak'));
    }

    public function pesan(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
    
        $pesan = new pesan();
        $pesan->subject = $data['subject'];
        $pesan->name = $data['name'];
        $pesan->email = $data['email'];
        $pesan->message = $data['message'];
        $pesan->save();
    
        // Tambahkan notifikasi sukses
        session()->flash('success', 'Pesan Anda berhasil dikirim!');
    
        return redirect()->route('kontak');
    }
    
}
