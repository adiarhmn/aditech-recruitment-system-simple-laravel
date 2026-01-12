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
