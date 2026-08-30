<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NurseConnect</title>

    <!-- Vite Assets (Tailwind CSS v4 & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap 5 CSS & Icons (opsional untuk komponen Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* TEMA WARNA HIJAU & ORANGE (Sesuai Landing Page & Tailwind Config) */
        :root {
            --nc-green: #7CA982;
            /* Hijau Utama */
            --nc-green-dark: #5c8061;
            /* Hijau Gelap */
            --nc-orange: #F4A261;
            /* Orange Accent */
            --nc-orange-hover: #e09050;
            /* Orange Hover */
            --nc-light: #F9F9FB;
            /* Background Abu Terang */
            --nc-soft-orange: #FFF0E6;
            /* Soft Orange */
        }

        body {
            background-color: var(--nc-light);
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
        }

        /* Utility Classes Custom Bootstrap Override */
        .text-primary-custom {
            color: var(--nc-green) !important;
        }

        .text-accent {
            color: var(--nc-orange) !important;
        }

        .bg-primary-custom {
            background-color: var(--nc-green) !important;
            color: white;
        }

        .bg-accent {
            background-color: var(--nc-orange) !important;
            color: white;
        }

        .bg-soft-accent {
            background-color: var(--nc-soft-orange) !important;
        }

        .btn-custom {
            border-radius: 50px;
            font-weight: 600;
            padding: 10px 24px;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.9;
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

<body class="flex flex-col min-h-screen">

    <!-- Memanggil Komponen Navbar Blade -->
    @include('components.navbar')

    <!-- Konten Utama Halaman -->
    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    <!-- Memanggil Komponen Footer Blade -->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>