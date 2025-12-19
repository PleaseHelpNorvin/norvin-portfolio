
<div class="max-w-md mx-auto mt-16 p-6 border rounded shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Admin Login</h1>

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full border px-3 py-2 rounded @error('email') border-red-500 @enderror"
            >
            @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                class="w-full border px-3 py-2 rounded @error('password') border-red-500 @enderror"
            >
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition"
        >
            Login
        </button>
    </form>
</div>
