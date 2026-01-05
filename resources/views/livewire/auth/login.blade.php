<div class="max-w-md mx-auto mt-16 p-6 border border-indigo-400 rounded shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center text-indigo-400">Admin Login</h1>

    @if($errors->has('email'))
        <p class="text-red-600 text-center mb-4">{{ $errors->first('email') }}</p>
    @endif

    <form wire:submit.prevent="login">
        <!-- Email -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold text-indigo-400" for="email">Email</label>
            <input
                type="email"
                id="email"
                wire:model.defer="email"
                required
                autofocus
                class="w-full border border-indigo-400 px-3 py-2 rounded text-indigo-400 bg-gray-900 placeholder-indigo-400 @error('email') border-red-500 @enderror"
                placeholder="Enter your email"
            >
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold text-indigo-400" for="password">Password</label>
            <input
                type="password"
                id="password"
                wire:model.defer="password"
                required
                class="w-full border border-indigo-400 px-3 py-2 rounded text-indigo-400 bg-gray-900 placeholder-indigo-400 @error('password') border-red-500 @enderror"
                placeholder="Enter your password"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-black text-white py-2 rounded hover:bg-indigo-400 transition"
        >
            Login
        </button>
    </form>
</div>
