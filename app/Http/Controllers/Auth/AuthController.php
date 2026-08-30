<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    // Tambahkan method ini untuk menangani form POST Login
    public function processLogin(Request $request)
    {
        // Nanti kamu bisa isi logika validasi dan Auth::attempt di sini
        return redirect('/patient/dashboard'); // Sementara redirect ke sini
    }

    // Tambahkan method ini untuk menangani form POST Register
    public function processRegister(Request $request)
    {
        // Nanti kamu bisa isi logika validasi dan User::create() di sini
        return redirect('/login'); // Sementara redirect ke login
    }
}
