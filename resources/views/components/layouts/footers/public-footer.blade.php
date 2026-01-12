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
                            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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