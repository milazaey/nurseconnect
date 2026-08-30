<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NurseConnect</title>

    <!-- 1. Pindah Bootstrap ke Atas agar tidak menimpa Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- 2. Vite Assets (Tailwind CSS v4 & JS) di bawah Bootstrap -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* TEMA WARNA HIJAU & ORANGE (Sesuai Landing Page & Tailwind Config) */
        :root {
            --nc-green: #7CA982;
            --nc-green-dark: #5c8061;
            --nc-orange: #F4A261;
            --nc-orange-hover: #e09050;
            --nc-light: #F9F9FB;
            --nc-soft-orange: #FFF0E6;
        }

        body {
            background-color: var(--nc-light);
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, sans-serif;
        }

        /* Hilangkan garis bawah default Bootstrap untuk semua link secara global (Opsional) */
        a {
            text-decoration: none;
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
    @include('components.navbar')

    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>