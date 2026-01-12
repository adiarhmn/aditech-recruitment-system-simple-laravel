<x-layouts.admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter & Header -->
        <x-feature::job-posting.components.list.filter-bar />

        <!-- Job List Table -->
        <x-ui.table :headers="['Job Title', 'Type', 'Applicants', 'Status', 'Published', 'Actions']">
            
            @forelse($jobPostings as $job)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-900">{{ $job->title }}</div>
                        <div class="text-xs text-slate-500">ID: JOB-{{ $job->created_at->format('Y') }}-{{ str_pad($job->id, 3, '0', STR_PAD_LEFT) }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <x-ui.badge color="blue" label="{{ ucfirst($job->employment_type) }}" />
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-slate-900">{{ $job->applications_count ?? 0 }}</span>
                            <span class="text-xs text-slate-400">candidates</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @php
                            $statusColor = match($job->status) {
                                'published' => 'green',
                                'draft' => 'gray',
                                'closed' => 'red',
                                default => 'blue',
                            };
                        @endphp
                        <x-ui.badge :color="$statusColor" label="{{ ucfirst($job->status) }}" />
                    </td>
                    <td class="px-6 py-4 text-slate-500">
                        {{ $job->published_at ? $job->published_at->format('M d, Y') : '--' }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('jobs.show', $job->id) }}" class="text-slate-400 hover:text-blue-700 transition" title="View">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </a>
                            <button class="text-slate-400 hover:text-blue-700 transition" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="text-slate-400 hover:text-red-600 transition" title="Delete">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-slate-500">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            <p class="font-medium text-lg">No job postings found</p>
                            <p class="text-sm mt-1">Get started by creating a new job post.</p>
                        </div>
                    </td>
                </tr>
            @endforelse

            <x-slot:pagination>
                {{ $jobPostings->links('vendor.pagination.aditech') }}
            </x-slot:pagination>
        </x-ui.table>
    </div>
</x-layouts.admin-layout>