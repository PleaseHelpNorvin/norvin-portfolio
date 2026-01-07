@php
    $currentRoute = Route::currentRouteName();
@endphp

<header class="sticky top-0 z-50 bg-gray-900/80 text-white border-b border-gray-800 backdrop-blur">
    <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">

        {{-- Logo --}}
        <h1 class="font-bold text-lg">
            <a href="{{ route('home') }}" wire:navigate class="{{ $currentRoute === 'home' ? 'text-indigo-400' : 'hover:text-gray-300' }}">
                Norvin Crujido
            </a>
        </h1>

        {{-- Desktop Nav --}}
        <nav class="hidden md:flex gap-6 items-center">
            <a href="{{ route('about') }}" wire:navigate
               class="{{ $currentRoute === 'about' ? 'text-indigo-400' : 'hover:text-gray-300' }}">
                About
            </a>

            <a href="{{ route('projects') }}" wire:navigate
               class="{{ $currentRoute === 'projects' ? 'text-indigo-400' : 'hover:text-gray-300' }}">
                Projects
            </a>

            <a href="{{ route('contact') }}" wire:navigate
               class="{{ $currentRoute === 'contact' ? 'text-indigo-400' : 'hover:text-gray-300' }}">
                Contact
            </a>

            @if (request()->is('admin') || request()->is('admin/*'))
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="hover:text-red-400">
                        Logout
                    </button>
                </form>
            @endif
        </nav>
        {{-- Mobile Menu --}}
        <div x-data="{ open: false }" class="md:hidden">

            {{-- Burger Button --}}
            <button @click="open = !open" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            {{-- Overlay --}}
            <div
                x-show="open"
                x-transition.opacity
                @click="open = false"
                class="fixed inset-0 bg-black/60 z-40"
            ></div>

            {{-- Mobile Dropdown --}}
            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                class="fixed top-[72px] left-4 right-4 z-50
                    bg-gray-900/90 backdrop-blur
                    border border-gray-800
                    rounded-xl shadow-xl"
            >
                <div class="p-5">

                    <a href="{{ route('about') }}" wire:navigate @click="open=false"
                    class="block px-4 py-3 rounded-lg
                    {{ $currentRoute === 'about'
                            ? 'bg-indigo-500/10 text-indigo-400 border-l-4 border-indigo-400'
                            : 'hover:bg-gray-800' }}">
                        About
                    </a>

                    <a href="{{ route('projects') }}" wire:navigate @click="open=false"
                    class="block px-4 py-3 rounded-lg
                    {{ $currentRoute === 'projects'
                            ? 'bg-indigo-500/10 text-indigo-400 border-l-4 border-indigo-400'
                            : 'hover:bg-gray-800' }}">
                        Projects
                    </a>

                    <a href="{{ route('contact') }}" wire:navigate @click="open=false"
                    class="block px-4 py-3 rounded-lg
                    {{ $currentRoute === 'contact'
                            ? 'bg-indigo-500/10 text-indigo-400 border-l-4 border-indigo-400'
                            : 'hover:bg-gray-800' }}">
                        Contact
                    </a>

                    @if (request()->is('admin') || request()->is('admin/*'))
                        <div class="border-t border-gray-800 my-3"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="w-full text-left px-4 py-3 rounded-lg
                                    text-red-400 hover:bg-red-500/10">
                                Logout
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>


    </div>
</header>
