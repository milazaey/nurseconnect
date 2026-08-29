<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Connect - Home Care On-Demand</title>

    <!-- Google Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite (CSS & JS Tailwind) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-bg text-text-dark font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Navbar Component nanti di sini -->
    @include('components.navbar')

    <!-- Konten Utama Halaman (Dinamis) -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Component nanti di sini -->
    @include('components.footer')

</body>

</html>