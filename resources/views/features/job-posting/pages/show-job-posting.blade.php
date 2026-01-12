<x-layouts.admin-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb & Actions -->
        <div class="flex items-center justify-between mb-8">
            <a href="{{ route('jobs') }}" class="flex items-center text-sm text-slate-500 hover:text-blue-800 transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Jobs
            </a>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-medium rounded-lg shadow-sm hover:bg-slate-50 transition">
                    Edit Job
                </button>
                <button class="px-4 py-2 bg-red-50 text-red-700 border border-red-100 text-sm font-medium rounded-lg shadow-sm hover:bg-red-100 transition">
                    Close Job
                </button>
            </div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            
            <!-- Job Header Component -->
            <x-feature::job-posting.components.show.header 
                title="Senior Laravel Developer"
                department="Engineering"
                location="Remote / Jakarta"
                type="Full-time"
                posted="Jan 10, 2024"
                status="Published"
            />

            <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Left Column: Description & Requirements -->
                <div class="lg:col-span-2 space-y-8">
                    <x-feature::job-posting.components.show.description />
                    <x-feature::job-posting.components.show.requirements />
                </div>

                <!-- Right Column: Metadata & Stats -->
                <div class="space-y-6">
                     <x-feature::job-posting.components.show.meta-card 
                        salary="$2,500 - $4,000"
                        applicants="42"
                        views="1,205"
                     />
                </div>
            </div>

        </div>
    </div>
</x-layouts.admin-layout>