<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegisterPatient()
    {
        return view('auth.register-patient');
    }

    public function showRegisterNurse()
    {
        return view('auth.register-nurse');
    }
}