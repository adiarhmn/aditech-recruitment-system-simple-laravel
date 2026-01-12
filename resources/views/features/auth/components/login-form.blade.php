    <form action="#" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                placeholder="name@company.com">
        </div>

        <div>
            <div class="flex justify-between mb-1">
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <a href="#" class="text-xs font-semibold text-blue-800 hover:text-blue-900 transition">Forgot
                    Password?</a>
            </div>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none transition"
                placeholder="••••••••">
        </div>

        <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember"
                class="w-4 h-4 text-blue-800 border-slate-300 rounded focus:ring-blue-800">
            <label for="remember" class="ml-2 block text-sm text-slate-600 font-medium">Remember me for 30 days</label>
        </div>

        <button type="submit"
            class="w-full py-3.5 bg-blue-800 hover:bg-blue-900 text-white font-bold rounded-lg shadow-sm hover:shadow-md transition">
            Sign In
        </button>
    </form>
