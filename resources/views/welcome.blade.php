<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADITECH Recruitment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-slate-800 bg-white">

    <!-- Navigation -->
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="#" class="shrink-0 flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-800 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="font-bold text-2xl text-slate-900 tracking-tight">ADITECH</span>
                    </a>
                </div>
                <div class="hidden md:flex md:items-center md:gap-8">
                    <a href="#about" class="text-sm font-medium text-slate-600 hover:text-blue-800 transition">About
                        Us</a>
                    <a href="#requirements"
                        class="text-sm font-medium text-slate-600 hover:text-blue-800 transition">Requirements</a>
                    <a href="#timeline"
                        class="text-sm font-medium text-slate-600 hover:text-blue-800 transition">Timeline</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-medium text-blue-800 hover:text-blue-900 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-medium text-slate-600 hover:text-blue-800 transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-6 py-2.5 bg-blue-800 hover:bg-blue-900 text-white text-sm font-medium rounded transition shadow-sm">
                                    Apply Now
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="max-w-2xl">
                    <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 leading-tight mb-6">
                        Shape the Future with <span class="text-blue-800">ADITECH</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        Join a team of innovators and creators. We are looking for passionate individuals to help us
                        build the next generation of technology solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}"
                            class="px-8 py-4 bg-blue-800 hover:bg-blue-900 text-white font-semibold rounded transition flex items-center justify-center gap-2">
                            Start Your Journey
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#about"
                            class="px-8 py-4 bg-white border border-slate-200 text-slate-700 hover:border-blue-800 hover:text-blue-800 font-semibold rounded transition flex items-center justify-center">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('assets/images/coding-with-team.jpg') }}" alt="ADITECH Team"
                            class="object-cover w-full h-full">
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -z-10 top-12 -right-12 w-full h-full border-2 border-blue-100 rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About ADITECH -->
    <section id="about" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <img src="{{ asset('assets/images/3-people-discussing.jpg') }}" alt="Collaboration"
                        class="rounded-lg shadow-lg">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-blue-800 font-semibold tracking-wide uppercase text-sm mb-3">About ADITECH</h2>
                    <h3 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-6">Innovating for a Better Tomorrow</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        At ADITECH, we believe in the power of technology to transform lives. Founded with a mission to
                        deliver cutting-edge digital solutions, we have grown into a global leader in software
                        innovation.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Our culture is built on trust, continuous learning, and collaboration. We value diverse
                        perspectives and are committed to creating an environment where every employee can thrive and
                        make a real impact.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-blue-800 pl-4">
                            <h4 class="font-bold text-slate-900 text-lg">Our Mission</h4>
                            <p class="text-sm text-slate-500 mt-1">To empower businesses through digital excellence.</p>
                        </div>
                        <div class="border-l-4 border-blue-800 pl-4">
                            <h4 class="font-bold text-slate-900 text-lg">Our Values</h4>
                            <p class="text-sm text-slate-500 mt-1">Integrity, Innovation, and Inclusivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruitment Requirements -->
    <section id="requirements" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-blue-800 font-semibold tracking-wide uppercase text-sm mb-3">Requirements</h2>
                <h3 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">What We Are Looking For</h3>
                <p class="text-slate-600">We seek individuals who are ready to challenge the status quo.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-8 bg-white border border-slate-100 rounded-xl hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-blue-50 text-blue-800 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-800 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Technical Proficiency</h4>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Solid foundation in computer science principles. Experience with modern frameworks and tools is
                        highly valued.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> PHP / Laravel
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> JavaScript / Vue / React
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> SQL & Database Design
                        </li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div
                    class="p-8 bg-white border border-slate-100 rounded-xl hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-blue-50 text-blue-800 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-800 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Problem Solving</h4>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Ability to analyze complex problems and propose efficient, scalable solutions. We value critical
                        thinking.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Analytical Thinking
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Algorithmic Logic
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Debugging Skills
                        </li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div
                    class="p-8 bg-white border border-slate-100 rounded-xl hover:shadow-xl transition duration-300 group">
                    <div
                        class="w-14 h-14 bg-blue-50 text-blue-800 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-800 group-hover:text-white transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Team Player</h4>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Excellent communication skills and the ability to work collaboratively in a dynamic team
                        environment.
                    </p>
                    <ul class="text-sm text-slate-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Effective Communication
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Agile Methodology
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 bg-blue-800 rounded-full"></div> Knowledge Sharing
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruitment Timeline -->
    <section id="timeline" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-blue-800 font-semibold tracking-wide uppercase text-sm mb-3">Timeline</h2>
                <h3 class="text-3xl font-bold text-slate-900">The Hiring Process</h3>
            </div>

            <div class="relative">
                <!-- Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-slate-200">
                </div>

                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="relative flex flex-col md:flex-row items-center justify-between">
                        <div class="order-1 md:w-5/12 text-center md:text-right">
                            <h4 class="text-xl font-bold text-slate-900">Application Review</h4>
                            <p class="text-sm text-blue-800 font-medium mb-2">January 15 - January 30</p>
                            <p class="text-slate-600 text-sm">We review all incoming applications to identify
                                candidates who meet our core requirements.</p>
                        </div>
                        <div
                            class="order-2 z-10 w-8 h-8 bg-blue-800 rounded-full border-4 border-white shadow flex items-center justify-center my-4 md:my-0">
                            <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                        </div>
                        <div class="order-3 md:w-5/12"></div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex flex-col md:flex-row items-center justify-between">
                        <div class="order-1 md:w-5/12"></div>
                        <div
                            class="order-2 z-10 w-8 h-8 bg-white border-4 border-blue-800 rounded-full shadow flex items-center justify-center my-4 md:my-0">
                            <div class="w-2.5 h-2.5 bg-blue-800 rounded-full"></div>
                        </div>
                        <div class="order-3 md:w-5/12 text-center md:text-left">
                            <h4 class="text-xl font-bold text-slate-900">Online Assessment</h4>
                            <p class="text-sm text-blue-800 font-medium mb-2">February 1 - February 5</p>
                            <p class="text-slate-600 text-sm">Selected candidates will be invited to complete a
                                technical assessment to evaluate their skills.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex flex-col md:flex-row items-center justify-between">
                        <div class="order-1 md:w-5/12 text-center md:text-right">
                            <h4 class="text-xl font-bold text-slate-900">Interview Rounds</h4>
                            <p class="text-sm text-blue-800 font-medium mb-2">February 10 - February 20</p>
                            <p class="text-slate-600 text-sm">In-depth technical and behavioral interviews with our
                                team leads and HR department.</p>
                        </div>
                        <div
                            class="order-2 z-10 w-8 h-8 bg-white border-4 border-blue-800 rounded-full shadow flex items-center justify-center my-4 md:my-0">
                            <div class="w-2.5 h-2.5 bg-blue-800 rounded-full"></div>
                        </div>
                        <div class="order-3 md:w-5/12"></div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex flex-col md:flex-row items-center justify-between">
                        <div class="order-1 md:w-5/12"></div>
                        <div
                            class="order-2 z-10 w-8 h-8 bg-white border-4 border-blue-800 rounded-full shadow flex items-center justify-center my-4 md:my-0">
                            <div class="w-2.5 h-2.5 bg-blue-800 rounded-full"></div>
                        </div>
                        <div class="order-3 md:w-5/12 text-center md:text-left">
                            <h4 class="text-xl font-bold text-slate-900">Final Offer</h4>
                            <p class="text-sm text-blue-800 font-medium mb-2">February 28</p>
                            <p class="text-slate-600 text-sm">Successful candidates will receive an offer to join the
                                ADITECH family.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-blue-700 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-lg">A</span>
                        </div>
                        <span class="font-bold text-white text-2xl">ADITECH</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-400 mb-6 max-w-sm">
                        ADITECH is a pioneering technology company dedicated to creating impactful digital solutions. We
                        are committed to excellence, innovation, and sustainable growth.
                    </p>
                    <div class="flex gap-4">
                        <!-- Social Placeholders -->
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-blue-700 transition"><span
                                class="sr-only">Facebook</span>f</a>
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-blue-700 transition"><span
                                class="sr-only">Twitter</span>t</a>
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-blue-700 transition"><span
                                class="sr-only">LinkedIn</span>in</a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-6">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#about" class="hover:text-blue-500 transition">About Us</a></li>
                        <li><a href="#requirements" class="hover:text-blue-500 transition">Requirements</a></li>
                        <li><a href="#timeline" class="hover:text-blue-500 transition">Hiring Process</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-blue-500 transition">Employee Login</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-6">Contact</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-700 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>123 Tech Avenue, <br>Silicon Valley, CA 94025</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>recruitment@aditech.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-16 pt-8 text-center text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} ADITECH. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
