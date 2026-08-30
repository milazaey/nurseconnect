@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-text-dark">Selamat Datang</h2>
            <p class="text-sm text-gray-500 mt-2">Masuk ke akun NurseConnect Anda</p>
        </div>

        <form class="space-y-6" action="/login" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">Ingat Saya</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-primary hover:text-primary-dark">Lupa password?</a>
                </div>
            </div>

            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all">
                Masuk
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Belum punya akun?
            <a href="/register" class="font-medium text-accent hover:text-accent-hover">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection