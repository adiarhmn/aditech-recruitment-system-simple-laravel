<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | ADITECH Recruitment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50">

    <div class="min-h-screen flex flex-col md:flex-row">
        
        <!-- Left Side: Visual/Branding -->
        <div class="hidden md:flex md:w-1/2 bg-blue-800 relative items-center justify-center p-12 overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute inset-0 opacity-10">
                <img src="{{ asset('assets/images/mechine-automation.jpg') }}" alt="Background" class="object-cover w-full h-full">
            </div>
            
            <div class="relative z-10 max-w-md text-center">
                <a href="/" class="inline-flex items-center gap-3 mb-12">
                    <div class="w-12 h-12 bg-white rounded flex items-center justify-center">
                        <span class="text-blue-800 font-bold text-2xl">A</span>
                    </div>
                    <span class="font-bold text-3xl text-white tracking-tight">ADITECH</span>
                </a>
                <h2 class="text-3xl font-bold text-white mb-6">Join Our Team</h2>
                <p class="text-blue-100 text-lg leading-relaxed">
                    Create your candidate profile to browse openings, track your applications, and start your journey with ADITECH.
                </p>
            </div>
            
            <!-- Floating Circles -->
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-blue-700 rounded-full opacity-50"></div>
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-blue-900 rounded-full opacity-50"></div>
        </div>

        <!-- Right Side: Register Form -->
        <div class="flex-1 flex items-center justify-center p-8 sm:p-12 md:p-16 bg-white">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="flex md:hidden items-center gap-3 mb-8 justify-center">
                    <div class="w-10 h-10 bg-blue-800 rounded flex items-center justify-center">
                        <span class="text-white font-bold text-xl">A</span>
                    </div>
                    <span class="font-bold text-2xl text-slate-900">ADITECH</span>
                </div>

                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-slate-900 mb-2">Create Account</h1>
                    <p class="text-slate-500">Enter your details to register as a candidate.</p>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="grid grid-cols-2 gap-6">
                         <div>
                            <label for="first_name" class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                            <input type="text" id="first_name" name="first_name" required 
                                class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                                placeholder="John">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required 
                                class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                                placeholder="Doe">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                            placeholder="name@example.com">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                        <input type="password" id="password" name="password" required 
                            class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                            placeholder="Create a password">
                        <p class="mt-2 text-xs text-slate-400">Must be at least 8 characters.</p>
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required 
                            class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                            placeholder="Confirm your password">
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox" id="terms" name="terms" required class="w-4 h-4 text-blue-800 border-slate-300 rounded focus:ring-blue-800">
                        </div>
                        <label for="terms" class="ml-2 block text-sm text-slate-600">
                            I agree to the <a href="#" class="text-blue-800 hover:text-blue-900 font-medium">Terms of Service</a> and <a href="#" class="text-blue-800 hover:text-blue-900 font-medium">Privacy Policy</a>.
                        </label>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-blue-800 hover:bg-blue-900 text-white font-bold rounded-lg shadow-sm hover:shadow-md transition">
                        Create Account
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-slate-200 text-center">
                    <p class="text-sm text-slate-500">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-bold text-blue-800 hover:text-blue-900 transition">Log In</a>
                    </p>
                </div>

                <div class="mt-5 flex justify-center gap-6 text-xs text-slate-400">
                    <a href="/" class="hover:text-slate-600 transition">Back to Home</a>
                    <a href="#" class="hover:text-slate-600 transition">Help Center</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
