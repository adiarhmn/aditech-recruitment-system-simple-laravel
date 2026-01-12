<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADITECH Recruitment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-slate-800 bg-white">
    <x-layouts.top-navigation.public-top-navigation />
    {{ $slot }}
    <x-layouts.footers.public-footer />
</body>

</html>
