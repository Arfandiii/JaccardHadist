<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencarian Hadist</title>
    <!-- Import Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body>
    <div
        class="fixed bottom-0 inset-0 -z-10 h-full w-full bg-white [background:radial-gradient(125%_125%_at_50%_10%,#fff_40%,#00a63e_100%)]">
    </div>

    <!-- Navbar -->

    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
</body>

</html>