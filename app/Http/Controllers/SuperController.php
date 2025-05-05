<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    //

    public function homeSuper()
    {
        $user = Auth::user();
        $userCount = User::where('role', 'Admin')->count();

        return view('SuperAdmin.homeSuper', compact('userCount', 'user'));
    }

    public function kelolaAkun()
    {
        $user = Auth::user();
        $admin = User::where('role', 'admin')->get();
        $userCount = User::where('role', 'Admin')->count();
        return view('SuperAdmin.kelolaAkun', compact('userCount', 'user', 'admin'));
    }

    public function editAkun($id)
    {
        $user = User::findOrFail($id);
        return view('SuperAdmin.editAkun', compact('user'));
    }

    public function postEditAkun(Request $request, $id)
    {
        $data = $request->validate([
            'profil' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->nama = $data['nama'];
        $user->email = $data['email'];
        $user->password =  bcrypt($data['password']);
        $user->role = $data['role'];
        $user->profil = $data['profil']->store('img');
        $user->save();

        return redirect()->route('kelolaAkun')->with('success', 'Akun berhasil diupdate');
    }

    public function tambahAkun()
    {
        $user = Auth::user();

        return view('SuperAdmin.tambahAkun', compact('user'));
    }
    public function postTambahAkun(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'profil' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = new User();
        $user->nama = $data['nama'];
        $user->email = $data['email'];
        $user->password =  bcrypt($data['password']);
        $user->role = $data['role'];
        $user->profil = $data['profil']->store('img');
        $user->save();

        return redirect()->route('kelolaAkun');
    }

    public function hapusAkun($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('kelolaAkun')->with('success', 'Akun berhasil dihapus');
        }

        return redirect()->route('kelolaAkun')->with('error', 'Akun gagal dihapus');
    }
}
