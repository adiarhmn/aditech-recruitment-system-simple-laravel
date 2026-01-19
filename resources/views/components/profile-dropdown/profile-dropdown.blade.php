<!-- User Profile -->
 <div class="flex items-center gap-4">
     <div class="relative" id="profile-dropdown-container">
         <button id="profile-dropdown-btn" class="flex items-center gap-2 text-sm focus:outline-none">
             <div class="w-8 h-8 rounded-full bg-blue-800 flex items-center justify-center border border-blue-700 text-white">
                 <span class="font-bold text-xs">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
             </div>
             <span class="hidden md:block font-medium text-slate-700">{{ Auth::user()->name }}</span>
             <svg id="profile-chevron" class="w-4 h-4 text-slate-400 transition-transform duration-200" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                 </path>
             </svg>
         </button>

         <!-- Dropdown Menu -->
         <div id="profile-dropdown-menu"
             class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-slate-200 focus:outline-none transition ease-out duration-100 transform origin-top-right">
             <div class="px-4 py-2 border-b border-slate-100">
                 <p class="text-sm font-bold text-slate-900 truncate">{{ Auth::user()->name }}</p>
                 <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
             </div>
             
             @if(Auth::user()->isCandidate())
                <a href="{{ route('candidate.dashboard') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Dashboard</a>
                <a href="{{ route('candidate.profile.edit') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Settings</a>
             @else
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Admin Dashboard</a>
             @endif

              <div class="border-t border-slate-100"></div>
              <form method="POST" action="{{ route('logout') }}" id="logout-form">
                  @csrf
                  <button type="submit" id="logout-btn"
                      class="block w-full text-left px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-red-600 transition font-medium">
                      Sign out
                  </button>
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
              const logoutBtn = document.getElementById('logout-btn');
              const logoutForm = document.getElementById('logout-form');

              if (!dropdownBtn || !dropdownMenu) return;

              function toggleDropdown() {
                  const isHidden = dropdownMenu.classList.contains('hidden');

                  if (isHidden) {
                      dropdownMenu.classList.remove('hidden');
                      chevron.classList.add('rotate-180');
                  } else {
                      dropdownMenu.classList.add('hidden');
                      chevron.classList.remove('rotate-180');
                  }
              }

              dropdownBtn.addEventListener('click', function(e) {
                  e.stopPropagation();
                  toggleDropdown();
              });

              if (logoutBtn) {
                logoutBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if (confirm('Are you sure you want to sign out?')) {
                        logoutForm.submit();
                    }
                });
              }

              document.addEventListener('click', function(e) {
                  if (container && !container.contains(e.target) && !dropdownMenu.classList.contains('hidden')) {
                      toggleDropdown();
                  }
              });

              document.addEventListener('keydown', function(e) {
                  if (e.key === 'Escape' && !dropdownMenu.classList.contains('hidden')) {
                      toggleDropdown();
                  }
              });
          });
      </script>
  @endPushOnce