<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegisterPatient()
    {
        return view('auth.register-patient');
    }

    public function showRegisterNurse()
    {
        return view('auth.register-nurse');
    }
}
