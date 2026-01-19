<x-layouts.candidate-layout>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <div class="mb-6">
            <a href="{{ route('candidate.dashboard') }}" class="inline-flex items-center text-sm text-slate-500 hover:text-blue-800 transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Dashboard
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-8 py-6 border-b border-slate-100 bg-slate-50/50">
                <h1 class="text-2xl font-bold text-slate-900">Edit Profile</h1>
                <p class="text-sm text-slate-500 mt-1">Update your personal information and account settings.</p>
            </div>

            <form action="{{ route('candidate.profile.update') }}" method="POST" class="p-8 space-y-6">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div class="md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required
                            class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-slate-300 rounded-lg p-2.5">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="md:col-span-2">
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required
                            class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-slate-300 rounded-lg p-2.5">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2 border-t border-slate-100 my-2 pt-4">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Change Password</h3>
                        <p class="text-sm text-slate-500 mb-6">Leave blank if you don't want to change your password.</p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">New Password</label>
                        <input type="password" id="password" name="password"
                            class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-slate-300 rounded-lg p-2.5">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-slate-300 rounded-lg p-2.5">
                    </div>
                </div>

                <div class="pt-6 flex items-center justify-end gap-4 border-t border-slate-100">
                    <a href="{{ route('candidate.dashboard') }}" class="px-6 py-2.5 border border-slate-300 text-slate-700 font-medium rounded-lg hover:bg-slate-50 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-2.5 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-lg shadow-sm transition">
                        Save Changes
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layouts.candidate-layout>
