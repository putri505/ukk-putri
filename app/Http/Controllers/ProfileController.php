<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profile
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Update foto
     */
    public function updateFoto(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto', 'public');

            $user = Auth::user();
            $user->foto = $path;
            /** @var \App\Models\User $user */
$user = Auth::user();
            $user->save();
        }

        return back()->with('success', 'Foto berhasil diubah');
    }

    /**
     * Update email
     */
    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = Auth::user();
        $user->email = $request->email;
        /** @var \App\Models\User $user */
$user = Auth::user();
        $user->save();

        return back()->with('success', 'Email berhasil diubah');
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6'
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        /** @var \App\Models\User $user */
$user = Auth::user();
        $user->save();

        return back()->with('success', 'Password berhasil diubah');
    }
}
