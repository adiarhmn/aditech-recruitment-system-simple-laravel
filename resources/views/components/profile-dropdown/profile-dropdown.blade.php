 <!-- User Profile -->
 <div class="flex items-center gap-4">
     <button class="text-blue-200 hover:text-white transition">
         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
             </path>
         </svg>
     </button>
     <div class="relative" id="profile-dropdown-container">
         <button id="profile-dropdown-btn" class="flex items-center gap-2 text-sm text-white focus:outline-none">
             <div class="w-8 h-8 rounded-full bg-blue-700 flex items-center justify-center border border-blue-600">
                 <span class="font-bold">AD</span>
             </div>
             <span class="hidden md:block font-medium">Admin User</span>
             <svg id="profile-chevron" class="w-4 h-4 text-blue-300 transition-transform duration-200" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                 </path>
             </svg>
         </button>

         <!-- Dropdown Menu -->
         <div id="profile-dropdown-menu"
             class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-slate-200 focus:outline-none transition ease-out duration-100 transform origin-top-right">
             <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
             <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
             <div class="border-t border-gray-100"></div>
             <form method="POST" action="{{ route('logout') }}">
                 @csrf
                 <button type="submit"
                     class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
             </form>
         </div>
     </div>
 </div>


 @pushOnce('scripts')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const dropdownBtn = document.getElementById('profile-dropdown-btn');
             const dropdownMenu = document.getElementById('profile-dropdown-menu');
             const chevron = document.getElementById('profile-chevron');
             const container = document.getElementById('profile-dropdown-container');

             function toggleDropdown() {
                 const isHidden = dropdownMenu.classList.contains('hidden');

                 if (isHidden) {
                     // Open
                     dropdownMenu.classList.remove('hidden');
                     dropdownMenu.classList.add('opacity-100', 'scale-100');
                     dropdownMenu.classList.remove('opacity-0', 'scale-95');
                     chevron.classList.add('rotate-180');
                 } else {
                     // Close
                     dropdownMenu.classList.add('hidden');
                     dropdownMenu.classList.remove('opacity-100', 'scale-100');
                     dropdownMenu.classList.add('opacity-0', 'scale-95');
                     chevron.classList.remove('rotate-180');
                 }
             }

             // Toggle on click
             dropdownBtn.addEventListener('click', function(e) {
                 e.stopPropagation();
                 toggleDropdown();
             });

             // Close when clicking outside
             document.addEventListener('click', function(e) {
                 if (!container.contains(e.target) && !dropdownMenu.classList.contains('hidden')) {
                     toggleDropdown();
                 }
             });

             // Close on escape key
             document.addEventListener('keydown', function(e) {
                 if (e.key === 'Escape' && !dropdownMenu.classList.contains('hidden')) {
                     toggleDropdown();
                 }
             });
         });
     </script>
 @endPushOnce
