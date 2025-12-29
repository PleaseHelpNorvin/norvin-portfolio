@php
    $currentRoute = Route::currentRouteName();
@endphp

<header class="sticky top-0 z-50 bg-gray-900/80 text-white border-b border-gray-800 backdrop-blur">
    <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">
        <h1 class="font-bold text-lg">
            <a wire:navigate href="{{ route('home') }}" 
                        class="px-2 py-1 transition-all duration-300 
                        {{ $currentRoute === 'home' 
                            ? 'text-indigo-400 glow' 
                            : 'hover:text-gray-300' }}">
                            {{ auth()->check() && auth()->user()->isAdmin()
                                ? 'Norvin Crujido Admin'
                                : 'Norvin Crujido'
                            }}
                        </a>
        </h1>

        <nav class="flex gap-4 items-center">
            @guest
                <a wire:navigate href="{{ route('about') }}"
                class="px-2 py-1 transition-all duration-300 
                {{ $currentRoute === 'about' 
                    ? 'text-indigo-400 glow' 
                    : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    About
                </a>

                <a wire:navigate href="{{ route('projects') }}"
                class="px-2 py-1 transition-all duration-300 
                {{ $currentRoute === 'projects' 
                    ? 'text-indigo-400 glow' 
                    : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    Projects
                </a>

                <a wire:navigate href="{{ route('contact') }}"
                class="px-2 py-1 transition-all duration-300 
                {{ $currentRoute === 'contact' 
                    ? 'text-indigo-400 glow' 
                    : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    Contacts
                </a>
            @endguest


            @auth
                @if(auth()->user()->isAdmin())
                    <a wire:navigate href="{{ route('admin.projects') }}" class="hover:text-gray-300">Projects</a>
                    <a wire:navigate href="{{ route('admin.projects.create') }}" class="hover:text-gray-300">Add Project</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="bg-gray-100 text-black px-3 py-1 rounded hover:bg-gray-300">
                            Logout
                        </button>
                    </form>
                @endif
            @endauth
        </nav>
        
    </div>
</header>
