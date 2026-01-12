<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | ADITECH Recruitment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-slate-800 bg-slate-50">

    <div class="min-h-screen flex flex-col md:flex-row">

        <!-- Left Side: Visual/Branding -->
        <div class="hidden md:flex md:w-1/2 bg-blue-800 relative items-center justify-center p-12 overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute inset-0 opacity-10">
                <img src="{{ asset('assets/images/coding-troubleshooting.jpg') }}" alt="Background"
                    class="object-cover w-full h-full">
            </div>

            <div class="relative z-10 max-w-md text-center">
                <a href="/" class="inline-flex items-center gap-3 mb-12">
                    <div class="w-12 h-12 bg-white rounded flex items-center justify-center">
                        <span class="text-blue-800 font-bold text-2xl">A</span>
                    </div>
                    <span class="font-bold text-3xl text-white tracking-tight">ADITECH</span>
                </a>
                <h2 class="text-3xl font-bold text-white mb-6">Welcome Back</h2>
                <p class="text-blue-100 text-lg leading-relaxed">
                    Log in to access your recruitment dashboard and manage your applications with ease.
                </p>
            </div>

            <!-- Floating Circles -->
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-blue-700 rounded-full opacity-50"></div>
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-blue-900 rounded-full opacity-50"></div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="flex-1 flex items-center justify-center p-8 sm:p-12 md:p-16 bg-white">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="flex md:hidden items-center gap-3 mb-8 justify-center">
                    <div class="w-10 h-10 bg-blue-800 rounded flex items-center justify-center">
                        <span class="text-white font-bold text-xl">A</span>
                    </div>
                    <span class="font-bold text-2xl text-slate-900">ADITECH</span>
                </div>

                <div class="mb-10">
                    <h1 class="text-2xl font-bold text-slate-900 mb-2">Login to your account</h1>
                    <p class="text-slate-500">Please enter your credentials to continue.</p>
                </div>

                <x-auth::login-form />

                <div class="mt-8 pt-8 border-t border-slate-100 text-center">
                    <p class="text-sm text-slate-500">
                        Don't have an account?
                        <a href="{{ route('register') }}"
                            class="font-bold text-blue-800 hover:text-blue-900 transition">Register</a>
                    </p>
                </div>

                <div class="mt-12 flex justify-center gap-6 text-xs text-slate-400">
                    <a href="/" class="hover:text-slate-600 transition">Back to Home</a>
                    <a href="#" class="hover:text-slate-600 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-600 transition">Support</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
