<header class="bg-black text-white p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <h1 class="font-bold text-lg">Norvin Portfolio Admin</h1>

        @if(Auth::check() && request()->routeIs('admin.projects'))
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-white text-black px-3 py-1 rounded hover:bg-gray-200">
                    Logout
                </button>
            </form>
        @endif
    </div>
</header>