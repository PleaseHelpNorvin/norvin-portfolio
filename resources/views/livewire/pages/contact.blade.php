<!-- Contact Section -->
<section class="pt-10 pb-10 bg-gray-950">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-0">

        <!-- Header -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-400 mb-4">
                Get In Touch
            </h2>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto">
                Have a question or want to collaborate? Send me a message or connect with me through my socials.
            </p>
        </div>

        @if (session('success'))
            <div class="mb-4 text-green-400 text-center font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <div class="bg-gray-900 p-8 rounded-2xl border border-gray-800">
            <h3 class="text-2xl font-semibold text-indigo-400 mb-6 text-center">Send Me a Message</h3>
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required
                    class="w-full px-5 py-3 rounded-xl bg-gray-800 border border-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">

                <input type="email" name="email" placeholder="Your Email" required
                    class="w-full px-5 py-3 rounded-xl bg-gray-800 border border-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">

                <textarea name="message" rows="5" placeholder="Your Message" required
                    class="w-full px-5 py-3 rounded-xl bg-gray-800 border border-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition"></textarea>

                <button type="submit"
                    class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 rounded-xl transition duration-300 shadow-lg hover:shadow-indigo-500/50">
                    Send Message
                </button>
            </form>

            <!-- Social Icons -->
            <div class="mt-8 flex justify-center space-x-6">
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/norvin-crujido-024137295/" target="_blank"
                    class="text-indigo-400 hover:text-indigo-500 transition transform hover:scale-110">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.8v2.16h.07c.67-1.27 2.3-2.61 4.73-2.61 5.06 0 6 3.33 6 7.66V24h-5v-7.9c0-1.88-.03-4.3-2.61-4.3-2.61 0-3.01 2.04-3.01 4.15V24h-5V8z"/>
                    </svg>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/PleaseHelpNorvin" target="_blank"
                    class="text-indigo-400 hover:text-indigo-500 transition transform hover:scale-110">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.757-1.333-1.757-1.09-.745.082-.73.082-.73 1.205.085 1.84 1.236 1.84 1.236 1.07 1.835 2.807 1.305 3.492.998.108-.775.42-1.305.763-1.605-2.665-.3-5.466-1.335-5.466-5.934 0-1.31.467-2.382 1.235-3.222-.123-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 0 1 3-.404c1.02.004 2.045.138 3 .404 2.288-1.552 3.294-1.23 3.294-1.23.653 1.653.242 2.873.12 3.176.77.84 1.233 1.912 1.233 3.222 0 4.61-2.807 5.63-5.478 5.926.43.372.813 1.104.813 2.227 0 1.606-.015 2.902-.015 3.293 0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.63-5.373-12-12-12z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
