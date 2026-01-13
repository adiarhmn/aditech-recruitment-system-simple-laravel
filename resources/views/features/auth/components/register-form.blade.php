  <form action="{{ route('register.submit') }}" method="POST" class="space-y-4">
      @csrf

      <div class="grid grid-cols-2 gap-6">
          <div>
              <label for="first_name" class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
              <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
                  class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                  placeholder="John">
              @error('first_name')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
          </div>
          <div>
              <label for="last_name" class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
              <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
                  class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                  placeholder="Doe">
              @error('last_name')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
          </div>
      </div>

      <div>
          <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required
              class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
              placeholder="name@example.com">
          @error('email')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
      </div>

      <div>
          <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
          <input type="password" id="password" name="password" required
              class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
              placeholder="Create a password">
          @error('password')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-2 text-xs text-slate-400">Must be at least 8 characters.</p>
      </div>

      <div>
          <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-2">Confirm
              Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required
              class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
              placeholder="Confirm your password">
          @error('password_confirmation')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
      </div>

      <div class="flex items-start">
          <div class="flex items-center h-5">
              <input type="checkbox" id="terms" name="terms" {{ old('terms') ? 'checked' : '' }} required
                  class="w-4 h-4 text-blue-800 border-slate-300 rounded focus:ring-blue-800">
          </div>
          <label for="terms" class="ml-2 block text-sm text-slate-600">
              I agree to <a href="#" class="text-blue-800 hover:text-blue-900 font-medium">Terms of
                  Service</a> and <a href="#" class="text-blue-800 hover:text-blue-900 font-medium">Privacy
                  Policy</a>.
          </label>
          @error('terms')
              <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
      </div>

      <button type="submit"
          class="w-full py-3.5 bg-blue-800 hover:bg-blue-900 text-white font-bold rounded-lg shadow-sm hover:shadow-md transition">
          Create Account
      </button>
  </form>

