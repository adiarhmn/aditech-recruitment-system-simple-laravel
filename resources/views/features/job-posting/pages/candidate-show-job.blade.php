<x-layouts.candidate-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <div class="mb-6">
            <a href="{{ route('candidate.jobs.index') }}" class="inline-flex items-center text-sm text-slate-500 hover:text-blue-800 transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Jobs
            </a>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden mb-8">
            
            <!-- Header -->
            <div class="px-8 py-8 border-b border-slate-100 bg-slate-50/50">
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                {{ ucfirst($jobPosting->employment_type) }}
                            </span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-100">
                                Active
                            </span>
                        </div>
                        <h1 class="text-3xl font-bold text-slate-900 mb-4">{{ $jobPosting->title }}</h1>
                        
                        <div class="flex flex-wrap items-center gap-6 text-sm text-slate-500">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ $jobPosting->location }}
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ number_format($jobPosting->salary_min) }} - {{ number_format($jobPosting->salary_max) }} / month
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Posted {{ $jobPosting->published_at ? $jobPosting->published_at->diffForHumans() : 'Recently' }}
                            </div>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-lg shadow-lg shadow-blue-800/30 transition transform hover:-translate-y-0.5">
                            Apply for this Job
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Left Column: Description & Requirements -->
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-4">About the Role</h3>
                        <div class="prose prose-slate prose-sm max-w-none text-slate-600 leading-relaxed">
                            {!! nl2br(e($jobPosting->description)) !!}
                        </div>
                    </div>

                    <!-- Requirements (Hardcoded for now as it's not in DB yet or I'd need to parse it) -->
                    <!-- Ideally this would come from a separate table or a JSON column -->
                    {{-- <x-feature::job-posting.components.show.requirements /> --}}
                </div>

                <!-- Right Column: Summary Card -->
                <div class="space-y-6">
                     <div class="bg-slate-50 rounded-xl border border-slate-200 p-6">
                        <h4 class="font-bold text-slate-900 mb-4">Job Summary</h4>
                        <ul class="space-y-4 text-sm">
                            <li class="flex justify-between">
                                <span class="text-slate-500">Employment Type</span>
                                <span class="font-medium text-slate-900">{{ ucfirst($jobPosting->employment_type) }}</span>
                            </li>
                             <li class="flex justify-between">
                                <span class="text-slate-500">Location</span>
                                <span class="font-medium text-slate-900 text-right">{{ $jobPosting->location }}</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-slate-500">Salary Range</span>
                                <span class="font-medium text-slate-900">{{ number_format($jobPosting->salary_min / 1000) }}k - {{ number_format($jobPosting->salary_max / 1000) }}k</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-slate-500">Date Posted</span>
                                <span class="font-medium text-slate-900">{{ $jobPosting->published_at ? $jobPosting->published_at->format('M d, Y') : 'N/A' }}</span>
                            </li>
                        </ul>
                     </div>

                     <div class="bg-blue-50 rounded-xl border border-blue-100 p-6">
                        <h4 class="font-bold text-blue-900 mb-2">Share this Job</h4>
                        <p class="text-sm text-blue-700 mb-4">Know someone who would be a perfect fit? Share this opportunity!</p>
                        <div class="flex gap-2">
                            <button class="w-10 h-10 rounded-full bg-white text-blue-700 hover:bg-blue-100 flex items-center justify-center transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </button>
                             <button class="w-10 h-10 rounded-full bg-white text-blue-700 hover:bg-blue-100 flex items-center justify-center transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </button>
                             <button class="w-10 h-10 rounded-full bg-white text-blue-700 hover:bg-blue-100 flex items-center justify-center transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            </button>
                        </div>
                     </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.candidate-layout>
