<x-layouts.candidate-layout>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <div class="mb-6">
            <a href="{{ route('candidate.jobs.show', $job->id) }}" class="inline-flex items-center text-sm text-slate-500 hover:text-blue-800 transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Job Details
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-8 py-6 border-b border-slate-100 bg-slate-50/50">
                <h1 class="text-2xl font-bold text-slate-900">Apply for {{ $job->title }}</h1>
                <p class="text-sm text-slate-500 mt-1">{{ $job->location }} • {{ ucfirst($job->employment_type) }}</p>
            </div>

            <form action="{{ route('candidate.jobs.apply.store', $job->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                @csrf

                <!-- Personal Info (Read Only) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4 bg-slate-50 rounded-lg border border-slate-100">
                    <div>
                        <label class="block text-xs font-medium text-slate-500 uppercase tracking-wider mb-1">Name</label>
                        <div class="text-slate-900 font-medium">{{ Auth::user()->name }}</div>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-500 uppercase tracking-wider mb-1">Email</label>
                        <div class="text-slate-900 font-medium">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <!-- Resume Upload -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Resume / CV <span class="text-red-500">*</span></label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg hover:border-blue-400 transition cursor-pointer relative group">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-slate-400 group-hover:text-blue-500 transition" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-slate-600">
                                <label for="resume" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                    <span>Upload a file</span>
                                    <input id="resume" name="resume" type="file" class="sr-only" accept=".pdf,.doc,.docx" required>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-slate-500">
                                PDF, DOC, DOCX up to 2MB
                            </p>
                            <p id="file-name" class="text-sm font-medium text-slate-900 mt-2 hidden"></p>
                        </div>
                    </div>
                    @error('resume')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Cover Letter -->
                <div>
                    <label for="cover_letter" class="block text-sm font-medium text-slate-700 mb-2">Cover Letter</label>
                    <textarea id="cover_letter" name="cover_letter" rows="6" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-slate-300 rounded-lg p-3" placeholder="Tell us why you're a great fit for this role..."></textarea>
                    @error('cover_letter')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4 flex items-center justify-end gap-4">
                    <a href="{{ route('candidate.jobs.show', $job->id) }}" class="px-6 py-3 border border-slate-300 text-slate-700 font-medium rounded-lg hover:bg-slate-50 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-3 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-lg shadow-sm transition flex items-center">
                        Submit Application
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>

            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        const fileInput = document.getElementById('resume');
        const fileNameDisplay = document.getElementById('file-name');

        fileInput.addEventListener('change', (e) => {
            const fileName = e.target.files[0]?.name;
            if (fileName) {
                fileNameDisplay.textContent = `Selected: ${fileName}`;
                fileNameDisplay.classList.remove('hidden');
            } else {
                fileNameDisplay.classList.add('hidden');
            }
        });
    </script>
    @endpush
</x-layouts.candidate-layout>
