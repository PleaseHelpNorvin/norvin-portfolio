<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <section class=" py-10 bg-gray-950">
        <div class="max-w-6xl mx-auto p-4 md:p-8 grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Left Column: Text -->
            <div class="md:pl-8">
                <!-- Hi, I’m with typing effect -->
                <p class="text-indigo-400 font-medium mb-2 break-words tracking-wide uppercase text-4xl md:text-5xl">
                    <span class="animate-typing">Hi, I’m Norvin <span class="animate-wave text-4xl md:text-6xl">👋</span></span>
                </p>

                <h2 class="mt-2 text-xl md:text-2xl font-semibold text-gray-300">
                    Junior - Mid Software Developer
                </h2>

                <p class="mt-5 text-gray-400 leading-relaxed break-words">
                    Crafting systems that scale, APIs that perform, and frontends that complement the user experience with simplicity and clarity.
                </p>

                <div class="mt-8 flex justify-center md:justify-start gap-4">
                    <button
                        id="contactBtn"
                        class="px-6 py-3 bg-indigo-600 rounded-lg font-medium text-white shadow-lg hover:bg-indigo-500 hover:scale-105 transition transform animate-collab"
                    >
                        Let's Collaborate
                    </button>
                    <!-- <a wire:navigate href="{{ route('contact')}}" class="px-6 py-3 border border-gray-700 rounded-lg font-medium text-gray-300 hover:border-indigo-500 hover:text-indigo-400 transition">
                        Contact Me
                    </a> -->
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="flex justify-center">
                <img
                    src="{{ asset('images/dummy_hero_profile.png') }}"
                    alt="Profile Image"
                    class="w-[600px] h-[600px] rounded-xl object-cover shadow-2xl" />
            </div>
        </div>
    </section>

    <section class="py-10 bg-indigo-950/40">
        <div class="max-w-6xl mx-auto p-4 md:p-6">

            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-semibold text-white">
                    Tech Stack
                </h2>
                <p class="mt-2 text-gray-400 text-sm max-w-xl mx-auto">
                    Technologies I commonly use.
                </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-6 items-center">

                <!-- Item -->
                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/laravel.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        Laravel
                    </span>
                </div>

                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/livewire.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        Livewire
                    </span>
                </div>

                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/fastapi.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        FastAPI
                    </span>
                </div>

                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/dotnet.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        ASP.NET
                    </span>
                </div>

                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/mysql.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        MySQL
                    </span>
                </div>

                <div class="group flex flex-col items-center">
                    <img src="{{ asset('images/tech_stack/github.png') }}"
                        class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    <span class="mt-1 text-xs text-gray-400 group-hover:text-white transition">
                        Git
                    </span>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="py-10 bg-gray-950">
        <div class="max-w-6xl mx-auto p-4 md:p-6">
        <h1>Work Experience here</h1>
        </div>
    </section> -->

    <div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-gray-900 rounded-lg max-w-md w-full p-6 mx-4">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-white">Contact Me</h3>
                <button id="closeModal" class="text-gray-400 hover:text-white text-2xl">&times;</button>
            </div>

            <!-- Options -->
            <div class="flex flex-col gap-4">
                <a href="https://www.linkedin.com/in/norvin-crujido-024137295/" target="_blank"
                class="px-4 py-3 bg-blue-600 rounded-lg text-white text-center hover:bg-blue-500 transition">
                LinkedIn
                </a>
                <a href="mailto:norvincrujido90@gmail.com"
                class="px-4 py-3 bg-green-600 rounded-lg text-white text-center hover:bg-green-500 transition">
                Email
                </a>
                <a href="https://github.com/PleaseHelpNorvin" target="_blank"
                class="px-4 py-3 bg-gray-700 rounded-lg text-white text-center hover:bg-gray-600 transition">
                GitHub
                </a>
            </div>
        </div>
    </div>

</div>