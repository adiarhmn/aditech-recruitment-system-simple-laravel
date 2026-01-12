@props(['salary', 'applicants', 'views'])

<div class="bg-slate-50 rounded-xl border border-slate-200 p-6 space-y-6">
    <div>
        <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Salary Range</h4>
        <div class="flex items-center gap-2 text-slate-900 font-bold text-lg">
            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            {{ $salary }}
            <span class="text-xs font-normal text-slate-500 self-center">/ month</span>
        </div>
    </div>

    <div class="border-t border-slate-200 pt-4">
         <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Engagement</h4>
         <div class="grid grid-cols-2 gap-4">
             <div>
                 <div class="text-2xl font-bold text-slate-900">{{ $applicants }}</div>
                 <div class="text-xs text-slate-500">Applicants</div>
             </div>
             <div>
                 <div class="text-2xl font-bold text-slate-900">{{ $views }}</div>
                 <div class="text-xs text-slate-500">Views</div>
             </div>
         </div>
    </div>

    <div class="border-t border-slate-200 pt-4">
        <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3">Share this Job</h4>
        <div class="flex gap-2">
            <button class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-blue-600 hover:border-blue-200 transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </button>
            <button class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-blue-700 hover:border-blue-200 transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </button>
             <button class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:border-slate-300 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </button>
        </div>
    </div>
</div>
