<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Norvin Portfolio Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">

    @livewireStyles
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col">

    @include('partials.navbar')

    <main class="flex-1">
        {{ $slot }}
    </main>

    @include('partials.footer')

    @livewireScripts
</body>
</html>
