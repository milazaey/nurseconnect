<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }
}
