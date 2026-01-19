<x-layouts.candidate-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-slate-900">Open Positions</h1>
            <p class="text-slate-500 mt-2 max-w-2xl mx-auto">Discover your next career opportunity with ADITECH. We are looking for talented individuals to join our growing team.</p>
        </div>

        <!-- Filter Bar -->
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" class="block w-full pl-10 pr-3 py-2 border border-slate-300 rounded-lg leading-5 bg-white placeholder-slate-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Search job titles...">
            </div>
            <div class="flex items-center gap-3">
                 <select class="block w-full pl-3 pr-10 py-2 text-base border-slate-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-lg">
                    <option>All Departments</option>
                    <option>Engineering</option>
                    <option>Design</option>
                    <option>Product</option>
                </select>
                <select class="block w-full pl-3 pr-10 py-2 text-base border-slate-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-lg">
                    <option>All Locations</option>
                    <option>Remote</option>
                    <option>Jakarta</option>
                </select>
            </div>
        </div>

        <!-- Job Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @forelse($jobPostings as $job)
                <div class="bg-white rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition group flex flex-col h-full">
                    <div class="p-6 flex-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                {{ ucfirst($job->employment_type) }}
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-700 transition">{{ $job->title }}</h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-3">{{ Str::limit($job->description, 100) }}</p>
                        
                        <div class="space-y-2">
                             <div class="flex items-center text-sm text-slate-500">
                                <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ $job->location }}
                            </div>
                            <div class="flex items-center text-sm text-slate-500">
                                <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ number_format($job->salary_min) }} - {{ number_format($job->salary_max) }}
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50 rounded-b-xl">
                        <a href="{{ route('candidate.jobs.show', $job->id) }}" class="block w-full text-center px-4 py-2 bg-white border border-slate-200 text-blue-700 font-medium rounded-lg hover:bg-blue-50 hover:border-blue-200 transition shadow-sm">
                            View Details
                        </a>
                    </div>
                </div>
            @empty
                 <div class="col-span-full text-center py-12">
                    <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    <h3 class="text-lg font-medium text-slate-900">No open positions</h3>
                    <p class="text-slate-500">Check back later for new opportunities.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div>
            {{ $jobPostings->links('vendor.pagination.aditech') }}
        </div>
    </div>
</x-layouts.candidate-layout>
