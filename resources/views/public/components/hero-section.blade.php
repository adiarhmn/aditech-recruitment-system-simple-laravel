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
