<header class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- Logo & Brand Name -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group text-decoration-none">
                <div class="w-10 h-10 rounded-2xl bg-primary flex items-center justify-center text-white font-bold text-xl shadow-sm group-hover:scale-105 transition-transform" style="background-color: #7CA982 !important;">
                    NC
                </div>
                <span class="text-xl font-bold tracking-tight text-gray-800">
                    Nurse<span style="color: #7CA982;">Connect</span>
                </span>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-[#7CA982] transition-colors {{ request()->is('/') ? 'font-bold !text-[#7CA982]' : '' }}">
                    Beranda
                </a>
                <a href="{{ url('/directory') }}" class="text-gray-700 hover:text-[#7CA982] transition-colors {{ request()->is('directory*') ? 'font-bold !text-[#7CA982]' : '' }}">
                    Cari Perawat
                </a>
                <a href="{{ url('/perawat-terdekat') }}" class="text-gray-700 hover:text-[#7CA982] transition-colors {{ request()->is('perawat-terdekat') || request()->is('nearby') ? 'font-bold !text-[#7CA982]' : '' }}">
                    Perawat Terdekat
                </a>
                <a href="{{ url('/admin/dashboard') }}" class="text-xs bg-gray-100 text-gray-600 px-3 py-1.5 rounded-full hover:bg-gray-200 transition-colors">
                    Portal Admin HRD
                </a>
            </nav>

            <!-- Action Buttons / Status Auth -->
            <div class="flex items-center gap-3">
                @auth
                <a href="{{ Auth::user()->role === 'admin' ? url('/admin/dashboard') : (Auth::user()->role === 'nurse' ? url('/nurse/dashboard') : url('/patient/dashboard')) }}" class="text-sm font-medium text-gray-700 hover:text-[#7CA982] px-3 py-2 transition-colors">
                    Dashboard
                </a>
                <form action="{{ route('logout') }}" method="POST" class="inline m-0">
                    @csrf
                    <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm font-medium transition-all border-0">
                        Keluar
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-[#7CA982] px-3 py-2 transition-colors">
                    Masuk
                </a>
                <a href="{{ route('register') }}" class="bg-accent hover:bg-accent-hover text-white px-5 py-2.5 rounded-xl font-medium text-sm shadow-sm hover:shadow transition-all" style="background-color: #F4A261 !important;">
                    Daftar / Pesan
                </a>
                @endauth
            </div>

        </div>
    </div>
</header>