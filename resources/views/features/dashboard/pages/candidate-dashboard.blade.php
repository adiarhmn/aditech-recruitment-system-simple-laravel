<x-layouts.candidate-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">My Dashboard</h1>
                <p class="text-sm text-slate-500 mt-1">Track your applications and upcoming interviews.</p>
            </div>
            <a href="{{ route('candidate.jobs.index') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-800 hover:bg-blue-900 text-white text-sm font-medium rounded-lg shadow-sm transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Find Jobs
            </a>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Applied Jobs -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 mb-1">Applied Jobs</p>
                    <h3 class="text-2xl font-bold text-slate-900">12</h3>
                </div>
                <div class="p-2 bg-blue-50 rounded-lg text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>

            <!-- Interviews -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 mb-1">Interviews</p>
                    <h3 class="text-2xl font-bold text-slate-900">3</h3>
                </div>
                <div class="p-2 bg-yellow-50 rounded-lg text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>

            <!-- Profile Views -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500 mb-1">Profile Views</p>
                    <h3 class="text-2xl font-bold text-slate-900">45</h3>
                </div>
                <div class="p-2 bg-green-50 rounded-lg text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Applications List -->
            <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
                    <h2 class="font-bold text-slate-900">My Applications</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-slate-50 text-slate-500">
                            <tr>
                                <th class="px-6 py-3 font-medium">Job Position</th>
                                <th class="px-6 py-3 font-medium">Date Applied</th>
                                <th class="px-6 py-3 font-medium">Status</th>
                                <th class="px-6 py-3 font-medium text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <!-- Item 1 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-slate-900">Senior Backend Engineer</div>
                                    <div class="text-xs text-slate-500">Engineering Dept</div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Jan 15, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">
                                        In Review
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-blue-700 hover:text-blue-900 font-medium text-xs">View Details</button>
                                </td>
                            </tr>
                            <!-- Item 2 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-slate-900">Product Manager</div>
                                    <div class="text-xs text-slate-500">Product Dept</div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Jan 10, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700">
                                        Interview
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-blue-700 hover:text-blue-900 font-medium text-xs">View Details</button>
                                </td>
                            </tr>
                            <!-- Item 3 -->
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-slate-900">UX Researcher</div>
                                    <div class="text-xs text-slate-500">Design Dept</div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Jan 05, 2024</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                        Applied
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-blue-700 hover:text-blue-900 font-medium text-xs">View Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sidebar: Profile & Recommended -->
            <div class="space-y-6">
                <!-- Profile Card -->
                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-lg">
                            JD
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900">John Doe</h3>
                            <p class="text-xs text-slate-500">Senior Developer</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-600">Profile Completion</span>
                            <span class="font-bold text-blue-800">85%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-2">
                            <div class="bg-blue-800 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <button class="w-full mt-6 px-4 py-2 border border-slate-200 hover:border-blue-800 text-slate-600 hover:text-blue-800 font-medium rounded-lg transition text-sm">
                        Edit Profile
                    </button>
                </div>

                <!-- Upcoming Interviews Mini -->
                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                    <h2 class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wider">Next Interview</h2>
                    <div class="p-4 bg-blue-50 rounded-lg border border-blue-100">
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-bold text-blue-900">Feb 14, 2024</span>
                        </div>
                        <p class="text-sm font-medium text-slate-900">Product Manager Role</p>
                        <p class="text-xs text-slate-600 mt-1">10:00 AM - 11:00 AM via Google Meet</p>
                        <button class="mt-3 text-xs font-medium text-blue-700 hover:underline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.candidate-layout>
