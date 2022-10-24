<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate(); //regenerate() untuk menghindari teknik session fixation

            return redirect()->intended('/dashboard');
        }

        // kalau passwordnya gagal makan akan di arahkan ke halaman login lagi
        return back()->with('loginError', 'Login Gagal!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); //session invalidate supaya tidak bisa di pakai lagi
        $request->session()->regenerateToken(); //session regenerateToken bikin baru supaya tidak di bajak
        return redirect('/');
    }

}
