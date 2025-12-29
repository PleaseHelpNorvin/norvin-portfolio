<div class="container mx-auto sm:px-6 lg:px-8">
    <section class=" pt-10 pb-0  bg-gray-950">
        <div class="max-w-6xl mx-auto p-4 md:pt-8 pb-0 grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Left Column: Text -->
            <div class="md:pl-8">
                <!-- Hi, I’m with typing effect -->
                <p class="text-indigo-400 font-medium mb-2 break-words tracking-wide uppercase text-4xl md:text-5xl">
                    <span class="animate-typing">Hi, I’m Norvin <span class="animate-wave text-4xl md:text-6xl">👋</span></span>
                </p>

                <h2 class="mt-2 text-xl md:text-2xl font-semibold text-gray-300">
                    Software Developer
                </h2>

                <p class="mt-5 text-gray-400 leading-relaxed break-words">
                        I help businesses build reliable web systems, internal tools, and APIs that scale without overengineering.
                </p>

                <div class="mt-8 flex gap-4">
                    <a wire:navigate href="{{ route('projects') }}"
                    class="px-6 py-3 bg-indigo-600 rounded-lg text-white font-medium hover:bg-indigo-500 transition">
                        View Projects
                    </a>

                    <a wire:navigate href="{{ route('contact') }}"
                    class="px-6 py-3 border border-gray-700 rounded-lg text-gray-300 hover:border-indigo-500 hover:text-indigo-400 transition">
                        Contact Me
                    </a>
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


    <section class="py-10 bg-gray-950">
        <div class="max-w-6xl mx-auto px-4 md:px-6">

            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold 
                        bg-gradient-to-r from-indigo-400 to-purple-500 
                        bg-clip-text text-transparent">
                    What I Can Do For You
                </h2>
                <p class="mt-3 text-gray-400 max-w-2xl mx-auto">
                    I build reliable, scalable, and user-focused systems using modern web technologies.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">🧩</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        Full-Stack Web Development
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        End-to-end development of modern web applications using Laravel, Livewire, Angular, and .NET.
                    </p>
                </div>

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">⚙️</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        Backend & API Development
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Designing secure, high-performance REST APIs with Laravel, FastAPI, and ASP.NET.
                    </p>
                </div>

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">📊</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        Admin Dashboards & Systems
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Building internal tools, admin panels, and dashboards focused on clarity and efficiency.
                    </p>
                </div>

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">🚀</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        System Optimization & Maintenance
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Improving performance, fixing bugs, and maintaining existing systems for long-term stability.
                    </p>
                </div>

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">🚀</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        WordPress Development & Customization
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Building and customizing WordPress websites with responsive themes, plugins, and custom functionality.
                    </p>
                </div>

                <div class="group bg-gray-900 rounded-xl p-6 border border-gray-800 hover:border-indigo-500 transition">
                    <!-- <div class="text-indigo-400 text-3xl mb-4">🚀</div> -->
                    <h3 class="text-lg font-semibold text-white mb-2">
                        Single Page Applications (SPA)
                    </h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Building fast, interactive web apps using frameworks like Angular, React, or Vue.js for seamless user interactions.
                    </p>
                </div>
            </div>
            

        </div>
    </section>

    <section class="py-10">
        <div class="max-w-6xl mx-auto p-4 md:p-6">

            <div class="text-center mb-8">
                <h2 class=" text-2xl md:text-3xl font-semibold 
                        bg-gradient-to-r from-indigo-400 to-purple-500 
                        bg-clip-text text-transparent">
                    Tech Stack
                </h2>
                <p class="mt-2 text-gray-400 text-sm max-w-xl mx-auto">
                    Technologies I commonly use.
                </p>
            </div> 
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-6 items-center">

                <!-- Laravel -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-red-500/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/laravel.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>

                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        Laravel
                    </span>
                </div>

                <!-- Livewire -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-pink-500/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/livewire.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>
                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        Livewire
                    </span>
                </div>

                <!-- FastAPI -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-emerald-400/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/fastapi.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>
                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        FastAPI
                    </span>
                </div>

                <!-- ASP.NET -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-purple-500/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/dotnet.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>
                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        ASP.NET
                    </span>
                </div>

                <!-- MySQL -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-blue-500/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/mysql.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>
                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        MySQL
                    </span>
                </div>

                <!-- GitHub -->
                <div class="group relative flex flex-col items-center transition-transform duration-300 group-hover:-translate-y-1">
                    <div class="absolute inset-0 rounded-full bg-gray-400/40 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative z-10 p-3 rounded-full">
                        <img src="{{ asset('images/tech_stack/github.png') }}"
                            class="h-9 md:h-10 grayscale opacity-80 group-hover:opacity-100 group-hover:grayscale-0 transition" />
                    </div>
                    <span class="mt-2 text-xs text-gray-400 group-hover:text-white transition">
                        Git
                    </span>
                </div>

            </div>
        </div>
    </section>


</div>