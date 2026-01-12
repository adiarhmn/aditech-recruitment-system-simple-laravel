<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | ADITECH Recruitment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-slate-800 bg-slate-50">

    <x-layouts.top-navigation.admin-top-navigation />
    <!-- Main Content -->
    <main class="py-10">
        {{ $slot }}
    </main>

    @stack('scripts')
    <script>
        
    </script>
</body>

</html>
