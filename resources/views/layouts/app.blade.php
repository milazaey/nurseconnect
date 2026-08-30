<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NurseConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* TEMA WARNA KOMPLEMENTER (Biru & Oranye) */
        :root {
            --nc-blue: #0A426F;
            /* Biru Gelap Utama */
            --nc-orange: #F27C38;
            /* Oranye Komplementer */
            --nc-light: #F4F7F6;
            /* Background Abu-abu terang */
            --nc-soft-orange: #FFF0E6;
            /* Background soft untuk card */
        }

        body {
            background-color: var(--nc-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Utility Classes Custom */
        .text-primary-custom {
            color: var(--nc-blue) !important;
        }

        .text-accent {
            color: var(--nc-orange) !important;
        }

        .bg-primary-custom {
            background-color: var(--nc-blue) !important;
            color: white;
        }

        .bg-accent {
            background-color: var(--nc-orange) !important;
            color: white;
        }

        .bg-soft-accent {
            background-color: var(--nc-soft-orange) !important;
        }

        /* Bentuk Membulat khas referensi (Pill & Rounded Cards) */
        .btn-custom {
            border-radius: 50px;
            font-weight: 600;
            padding: 10px 24px;
            transition: 0.3s;
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.8;
            transform: translateY(-2px);
        }

        .card-rounded {
            border-radius: 24px;
            border: none;
        }

        .badge-pill {
            border-radius: 50px;
            padding: 6px 16px;
            font-weight: 500;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3" style="border-bottom-left-radius: 24px; border-bottom-right-radius: 24px;">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary-custom fs-4" href="{{ url('/') }}">NurseConnect.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto bg-light rounded-pill px-3 py-1">
                    <li class="nav-item"><a class="nav-link px-3 {{ request()->is('/') ? 'fw-bold text-dark' : 'text-muted' }}" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link px-3 {{ request()->is('directory') ? 'fw-bold text-dark' : 'text-muted' }}" href="{{ url('/directory') }}">Cari Perawat</a></li>
                    <li class="nav-item"><a class="nav-link px-3 {{ request()->is('perawat-terdekat') ? 'fw-bold text-dark' : 'text-muted' }}" href="{{ url('/perawat-terdekat') }}">Perawat Terdekat</a></li>
                </ul>
                <div class="d-flex mt-3 mt-lg-0">
                    <a href="{{ route('login') }}" class="btn text-primary-custom fw-bold me-2">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-custom bg-primary-custom shadow-sm">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>