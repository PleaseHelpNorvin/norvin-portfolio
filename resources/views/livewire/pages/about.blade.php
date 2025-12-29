<div>
    <!-- Hero Section -->
        <section class="pt-10 pb-10 md:pt-0 md:pb-0 md:px-6 bg-gray-950 min-h-[60vh] flex items-center">
        <div class="max-w-6xl mx-auto px-4 md:px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Left Column -->
            <div class="md:pr-8">
                <h1 class="text-4xl md:text-5xl font-bold text-indigo-400 mb-4">
                    Be like water.
                </h1>
                <p class="text-gray-400 text-lg md:text-xl mb-6">
                    I adapt, learn fast, and craft systems that flow smoothly — creating scalable, user-focused solutions.
                </p>
                <p class="text-gray-300 mb-6">
                    I’m Norvin, a software developer who builds reliable web systems, internal tools, and APIs. I focus on simplicity, performance, and maintainable code that lasts.
                </p>

            </div>

            <!-- Right Column: Image -->
            <div class="flex justify-center">
                <img src="{{ asset('images/dummy_hero_profile.png') }}" 
                    alt="Norvin working" 
                    class="w-80 sm:w-96 md:w-[28rem] lg:w-[32rem] rounded-xl shadow-2xl object-cover">            </div>
        </div>
    </section>

    <!-- Personal Story Section -->
    <section class="pt-10 pb-10 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <!-- Header -->
            <!-- <h2 class="text-2xl md:text-3xl font-semibold 
                    bg-gradient-to-r from-indigo-400 to-purple-500 
                    bg-clip-text text-transparent">
                My Story
            </h2> -->

            <!-- Personal Text -->
            <p class=" text-gray-400 text-lg md:text-xl leading-relaxed">
                “What started as a hobby quickly became a passion. I was intrigued, studied it, learned its magic, 
                and eventually began implementing that magic into real projects.”
            </p>

            <!-- Optional: Fun / Personality -->
            <p class="mt-4 text-gray-400 text-base md:text-lg">
                Outside of coding, I tinker with IoT devices, explore new tech, and occasionally lose myself in games.
            </p>
        </div>
    </section>

    <section class="pt-10 pb-0 bg-gray-950">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold 
                        bg-gradient-to-r from-indigo-400 to-purple-500 
                        bg-clip-text text-transparent">
                    Experience
                </h2>
                <p class="mt-2 text-gray-400 text-sm max-w-xl mx-auto">
                    Where I've applied my skills and built real-world projects.
                </p>
            </div>

            <!-- Experience Cards -->
            <div class="flex flex-col md:flex-row gap-6">
                
                <!-- Card 1 -->

                <div class="flex-1 bg-gray-900 rounded-xl p-6 shadow-lg border border-gray-800 hover:border-indigo-500 transition-colors duration-300">
                    <h3 class="text-white font-semibold text-lg mb-2">Associate Software Developer</h3>
                    <p class="text-sm text-indigo-400 mb-4">Auksilyo Professionals, Inc. • Cebu City • February 2025 - PRESENT</p>

                        <ul class="list-none">
                            <li class="flex items-start gap-2 mb-2">
                                <span class="text-indigo-400">•</span>
                                <span>Maintained ASP.NET C# SaaS for Lock IoT Project</span>
                            </li>
                            <li class="flex items-start gap-2 mb-2">
                                <span class="text-indigo-400">•</span>
                                <span>Maintained and implemented solutions for the annual Vulnerability and Penetration Testing of the SaaS website for a Lock IoT project.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-400">•</span>
                                <span>Developed tools applications based on the needs of the clients needs</span>
                            </li>
                        </ul>
                </div>

                <!-- Card 2 -->

                <div class="flex-1 bg-gray-900 rounded-xl p-6 shadow-lg border border-gray-800 hover:border-indigo-500 transition-colors duration-300">
                    <h3 class="text-white font-semibold text-lg mb-2">Software Developer Intern (OJT)</h3>
                    <p class="text-sm text-indigo-400 mb-4">Auksilyo Professionals, Inc. • Cebu City • August 2024 - February 2025</p>

                        <ul class="list-none">
                            <li class="flex items-start gap-2 mb-2">
                                <span class="text-indigo-400">•</span>
                                <span>Developed full-stack applications using Laravel and Angular.</span>
                            </li>
                            <li class="flex items-start gap-2 mb-2">
                                <span class="text-indigo-400">•</span>
                                <span>Managed databases, implemented authentication and authorization systems.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-indigo-400">•</span>
                                <span>Optimized system performance and ensured code maintainability.</span>
                            </li>
                        </ul>
                </div>

            </div>
        </div>
    </section>

    
    <!-- Academics Section -->
    <section class="pt-10 pb-10 bg-gray-950">
        <div class="max-w-6xl mx-auto px-4 md:px-6">

            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-semibold 
                           bg-gradient-to-r from-indigo-400 to-purple-500 
                           bg-clip-text text-transparent">
                    Achievements
                </h2>
                <p class="mt-2 text-gray-400 text-sm max-w-xl mx-auto">
                    Some of the awards and certificates I've earned during my academic journey.
                </p>
            </div>

            <!-- Certificates Grid -->
<div class="flex justify-center">
    <div class="grid gap-6"
         style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); max-width: 900px;">
        
        <!-- Certificate Card 1 -->
        <div class="group bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-indigo-500 transition cursor-pointer">
            <div class="relative overflow-hidden">
                <img src="{{ asset('images/certificates/NorvinCertipng.png') }}" 
                     alt="Certificate" 
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-300 certificate-img" />
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold text-white mb-1">BEST IN MULTI-PLATFORM PROGRAMMING</h3>
                <p class="text-sm text-gray-400">Received this award during my college capstone year, 2024</p>
            </div>
        </div>

        <!-- Certificate Card 2 -->
        <div class="group bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-indigo-500 transition cursor-pointer">
            <div class="relative overflow-hidden">
                <img src="{{ asset('images/certificates/NorvinGradCerti.png') }}" 
                     alt="Certificate" 
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-300 certificate-img" />
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold text-white mb-1">CERTIFICATE OF GRADUATION</h3>
                <p class="text-sm text-gray-400">Received this award during my college Graduation, 2024</p>
            </div>
        </div>

        
    </div>
</div>        </div>
    </section>

    <div id="imgModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden z-50">
        <img id="modalImg" src="" class="max-h-[95vh] rounded-xl shadow-2xl" />
    </div>


</div>
