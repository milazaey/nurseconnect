<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    // Proses Login
    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect sesuai role
            $role = Auth::user()->role;
            if ($role === 'admin') return redirect('/admin/dashboard');
            if ($role === 'nurse') return redirect('/nurse/dashboard');

            return redirect('/patient/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Proses Register
    public function processRegister(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|in:patient,nurse,admin',
            'password' => 'required|string|min:8|confirmed', // Pastikan ada password_confirmation di view
        ]);

        // 2. Simpan user ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // 3. Auto-login setelah register
        Auth::login($user);

        // 4. Redirect sesuai role yang didaftarkan
        if ($user->role === 'admin') return redirect('/admin/dashboard');
        if ($user->role === 'nurse') return redirect('/nurse/dashboard');
        return redirect('/patient/dashboard');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        // 1. Keluarkan user
        Auth::logout();

        // 2. Hapus semua data sesi (session)
        $request->session()->invalidate();

        // 3. Bikin token keamanan baru (biar aman dari serangan peretas)
        $request->session()->regenerateToken();

        // 4. Arahkan kembali ke halaman utama (home) atau login
        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
}
