 <!-- Top Navigation -->
 <nav class="bg-blue-900 border-b border-blue-800 sticky top-0 z-50">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="flex justify-between h-16">
             <!-- Logo & Menu -->
             <div class="flex items-center gap-8">
                 <a href="{{ route('dashboard') }}" class="shrink-0 flex items-center gap-3">
                     <div class="w-8 h-8 bg-white rounded flex items-center justify-center">
                         <span class="text-blue-900 font-bold text-lg">A</span>
                     </div>
                     <span class="font-bold text-xl text-white tracking-tight">ADITECH</span>
                 </a>

                 <!-- Desktop Menu -->
                 <div class="hidden md:flex space-x-1">
                     <a href="{{ route('dashboard') }}"
                         class="px-3 py-2 rounded-md text-sm font-medium text-white bg-blue-800">
                         Dashboard
                     </a>
                     <a href="#"
                         class="px-3 py-2 rounded-md text-sm font-medium text-blue-100 hover:text-white hover:bg-blue-800 transition">
                         Jobs
                     </a>
                     <a href="#"
                         class="px-3 py-2 rounded-md text-sm font-medium text-blue-100 hover:text-white hover:bg-blue-800 transition">
                         Candidates
                     </a>
                     <a href="#"
                         class="px-3 py-2 rounded-md text-sm font-medium text-blue-100 hover:text-white hover:bg-blue-800 transition">
                         Applications
                     </a>
                 </div>
             </div>

            <x-profile-dropdown />
         </div>
     </div>
 </nav>
