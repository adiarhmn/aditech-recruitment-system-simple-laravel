<x-layouts.admin-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-8">
            <a href="{{ route('admin.jobs.index') }}" class="inline-flex items-center text-sm font-medium text-blue-800 hover:text-blue-900 mb-4 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Job Listings
            </a>
            <h1 class="text-2xl font-bold text-slate-900">Create New Job Posting</h1>
            <p class="text-sm text-slate-500 mt-1">Fill in the details below to post a new job opportunity.</p>
        </div>

        <form action="{{ route('admin.jobs.store') }}" method="POST" class="space-y-6">
            @csrf

            <x-forms.section
                icon="book-alert"
                title="Basic Information">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <x-forms.label for="title" :required="true">Job Title</x-forms.label>
                        <x-forms.input name="title" placeholder="e.g., Senior Laravel Developer" required />
                    </div>

                    <div>
                        <x-forms.label for="employment_type" :required="true">Employment Type</x-forms.label>
                        <x-forms.select name="employment_type" placeholder="Select Type" required>
                            <x-forms.option value="full-time">Full-time</x-forms.option>
                            <x-forms.option value="part-time">Part-time</x-forms.option>
                            <x-forms.option value="contract">Contract</x-forms.option>
                            <x-forms.option value="internship">Internship</x-forms.option>
                        </x-forms.select>
                    </div>

                    <div>
                        <x-forms.label for="location" :required="true">Location</x-forms.label>
                        <x-forms.input name="location" placeholder="e.g., Jakarta, Indonesia" required />
                    </div>

                    <div>
                        <x-forms.label for="salary_min">Minimum Salary</x-forms.label>
                        <x-forms.number name="salary_min" placeholder="e.g., 8000000" min="0" step="0.01" />
                    </div>

                    <div>
                        <x-forms.label for="salary_max">Maximum Salary</x-forms.label>
                        <x-forms.number name="salary_max" placeholder="e.g., 15000000" min="0" step="0.01" />
                    </div>
                </div>
            </x-forms.section>

            <x-forms.section
                icon="briefcase-business"
                title="Job Details">
                <div class="space-y-6">
                    <div>
                        <x-forms.label for="description" :required="true">Job Description</x-forms.label>
                        <x-forms.textarea name="description" rows="8" placeholder="Provide a detailed description of role, responsibilities, requirements, and day-to-day activities..." required />
                    </div>
                </div>
            </x-forms.section>

            <x-forms.section
                icon="pin"
                title="Publishing Options">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <x-forms.label for="status" :required="true">Status</x-forms.label>
                        <x-forms.select name="status" value="published" required>
                            <x-forms.option value="draft">Draft</x-forms.option>
                            <x-forms.option value="published">Published</x-forms.option>
                            <x-forms.option value="closed">Closed</x-forms.option>
                        </x-forms.select>
                        <x-forms.help>Draft posts are saved but not visible to candidates.</x-forms.help>
                    </div>
                </div>
            </x-forms.section>

            <div class="flex items-center justify-end gap-4 pt-4">
                <a href="{{ route('admin.jobs.index') }}"
                    class="px-6 py-3 border border-slate-300 text-slate-700 font-medium rounded-lg hover:bg-slate-50 transition">
                    Cancel
                </a>
                <x-forms.button type="submit" size="md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Create Job Posting
                </x-forms.button>
            </div>

        </form>

    </div>
</x-layouts.admin-layout>
