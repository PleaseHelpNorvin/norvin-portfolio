@php
    $currentRoute = Route::currentRouteName();
@endphp

<header class="sticky top-0 z-50 bg-gray-900/80 text-white border-b border-gray-800 backdrop-blur">
    <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">

        {{-- Logo --}}
        <h1 class="font-bold text-lg">
            <a href="{{ route('home') }}" wire:click="closeMobile"
            class="px-2 py-1 transition-all duration-300
            {{ $currentRoute === 'home' ? 'text-indigo-400 glow' : 'hover:text-gray-300' }}">
                {{ auth()->check() && auth()->user()->isAdmin() ? 'Norvin Crujido Admin' : 'Norvin Crujido' }}
            </a>
        </h1>

        {{-- Burger (mobile only) --}}
        <button wire:click="toggleMobile"
                class="md:hidden text-gray-300 hover:text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        {{-- Desktop Nav --}}
        <nav class="hidden md:flex gap-4 items-center">

            @guest
                <a href="{{ route('about') }}"
                   class="px-2 py-1 transition-all duration-300
                   {{ $currentRoute === 'about'
                        ? 'text-indigo-400 glow'
                        : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    About
                </a>

                <a href="{{ route('projects') }}"
                   class="px-2 py-1 transition-all duration-300
                   {{ $currentRoute === 'projects'
                        ? 'text-indigo-400 glow'
                        : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    Projects
                </a>

                <a href="{{ route('contact') }}"
                   class="px-2 py-1 transition-all duration-300
                   {{ $currentRoute === 'contact'
                        ? 'text-indigo-400 glow'
                        : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                    Contacts
                </a>
            @endguest

            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.projects') }}"
                       class="px-2 py-1 transition-all duration-300
                       {{ $currentRoute === 'admin.projects'
                            ? 'text-indigo-400 glow'
                            : 'text-gray-300 hover:text-indigo-400 hover:glow' }}">
                        Projects
                    </a>

                    {{-- Logout via Livewire --}}
                    <button wire:click="logout"
                            class="bg-gray-100 text-black px-3 py-1 rounded hover:bg-gray-300">
                        Logout
                    </button>
                @endif
            @endauth

        </nav>
    </div>

    {{-- Mobile Dropdown --}}
    <div class="md:hidden overflow-hidden transition-all duration-300
                {{ $mobileOpen ? 'max-h-96' : 'max-h-0' }}">

        <div class="px-4 pb-4 flex flex-col gap-3 bg-gray-900 border-t border-gray-800">

            @guest
                <a href="{{ route('about') }}"
                   wire:click="closeMobile"
                   class="text-gray-300 hover:text-indigo-400">
                    About
                </a>

                <a href="{{ route('projects') }}"
                   wire:click="closeMobile"
                   class="text-gray-300 hover:text-indigo-400">
                    Projects
                </a>

                <a href="{{ route('contact') }}"
                   wire:click="closeMobile"
                   class="text-gray-300 hover:text-indigo-400">
                    Contacts
                </a>
            @endguest

            @auth
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.projects') }}"
                       wire:click="closeMobile"
                       class="text-gray-300 hover:text-indigo-400">
                        Admin Projects
                    </a>

                    <button wire:click="logout"
                            class="text-left text-red-400 hover:text-red-300">
                        Logout
                    </button>
                @endif
            @endauth

        </div>
    </div>
</header>
