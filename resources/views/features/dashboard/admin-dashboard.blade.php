<x-layouts.admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Dashboard Overview</h1>
                <p class="text-sm text-slate-500 mt-1">Welcome back, here's what's happening today.</p>
            </div>
            <button
                class="inline-flex items-center px-4 py-2 bg-blue-800 hover:bg-blue-900 text-white text-sm font-medium rounded-lg shadow-sm transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Post New Job
            </button>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Stat Card 1 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-blue-50 text-blue-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Total Jobs</h3>
                <p class="text-2xl font-bold text-slate-900 mt-1">24</p>
            </div>

            <!-- Stat Card 2 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-purple-50 text-purple-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+5%</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Active Candidates</h3>
                <p class="text-2xl font-bold text-slate-900 mt-1">1,203</p>
            </div>

            <!-- Stat Card 3 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-orange-50 text-orange-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+18%</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">New Applications</h3>
                <p class="text-2xl font-bold text-slate-900 mt-1">85</p>
            </div>

            <!-- Stat Card 4 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 bg-teal-50 text-teal-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-slate-500 bg-slate-100 px-2 py-1 rounded-full">0%</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Hired This Month</h3>
                <p class="text-2xl font-bold text-slate-900 mt-1">12</p>
            </div>
        </div>

        <!-- Recent Activity / Content -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Recent Applications Table -->
            <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
                    <h2 class="font-bold text-slate-900">Recent Applications</h2>
                    <a href="#" class="text-sm font-medium text-blue-700 hover:text-blue-800">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-slate-50 text-slate-500">
                            <tr>
                                <th class="px-6 py-3 font-medium">Candidate</th>
                                <th class="px-6 py-3 font-medium">Applied For</th>
                                <th class="px-6 py-3 font-medium">Date</th>
                                <th class="px-6 py-3 font-medium">Status</th>
                                <th class="px-6 py-3 font-medium text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                            JD</div>
                                        <div>
                                            <div class="font-medium text-slate-900">John Doe</div>
                                            <div class="text-xs text-slate-500">john@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600">Senior Laravel Developer</td>
                                <td class="px-6 py-4 text-slate-500">Jan 12, 2024</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">
                                        Review
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-slate-400 hover:text-blue-700 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                            AS</div>
                                        <div>
                                            <div class="font-medium text-slate-900">Alice Smith</div>
                                            <div class="text-xs text-slate-500">alice@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600">UI/UX Designer</td>
                                <td class="px-6 py-4 text-slate-500">Jan 11, 2024</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700">
                                        Interview
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-slate-400 hover:text-blue-700 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                            MR</div>
                                        <div>
                                            <div class="font-medium text-slate-900">Mark Roberts</div>
                                            <div class="text-xs text-slate-500">mark@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-600">Frontend Engineer</td>
                                <td class="px-6 py-4 text-slate-500">Jan 10, 2024</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                        New
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-slate-400 hover:text-blue-700 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right Column: Quick Actions & Notifications -->
            <div class="space-y-8">
                <!-- Quick Actions -->
                <div class="bg-blue-800 rounded-xl p-6 text-white shadow-lg">
                    <h2 class="font-bold text-lg mb-4">Quick Actions</h2>
                    <div class="space-y-3">
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 bg-blue-700 hover:bg-blue-600 rounded-lg transition">
                            <span class="text-sm font-medium">Create New Job Post</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 bg-blue-700 hover:bg-blue-600 rounded-lg transition">
                            <span class="text-sm font-medium">Schedule Interview</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="w-full flex items-center justify-between px-4 py-3 bg-blue-700 hover:bg-blue-600 rounded-lg transition">
                            <span class="text-sm font-medium">Add Team Member</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Upcoming Interviews -->
                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                    <h2 class="font-bold text-slate-900 mb-4">Upcoming Interviews</h2>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-12 text-center bg-blue-50 rounded-lg p-1">
                                <div class="text-xs font-bold text-blue-800">FEB</div>
                                <div class="text-lg font-bold text-slate-900">14</div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Frontend Dev Interview</h4>
                                <p class="text-xs text-slate-500">10:00 AM - 11:00 AM</p>
                                <p class="text-xs text-slate-500 mt-1">Candidate: Sarah Jones</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="shrink-0 w-12 text-center bg-blue-50 rounded-lg p-1">
                                <div class="text-xs font-bold text-blue-800">FEB</div>
                                <div class="text-lg font-bold text-slate-900">15</div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900">Product Manager Review</h4>
                                <p class="text-xs text-slate-500">02:00 PM - 03:00 PM</p>
                                <p class="text-xs text-slate-500 mt-1">Candidate: David Lee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-layout>
