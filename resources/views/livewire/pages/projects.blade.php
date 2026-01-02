<div>
    <!-- Hero Intro -->
    <section class="py-20 bg-gray-950">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p class="text-gray-400 text-lg md:text-xl">
                Check out some of my recent projects below and see what I’ve been working on.
            </p>
        </div>
    </section>



    <!-- Projects Grid -->
    <section class="py-12">
        
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-white">My Projects</h2>

            <select wire:change="setFilter($event.target.value)" class=" mb-6 p-2 rounded bg-gray-800 text-white ...">
                <option value="all">All Tiers</option>
                <option value="basic">Basic</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>

            @if($projects->isEmpty())
                <p class="text-gray-400">No projects to show for this tier.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <!-- Flip Card -->
                        <div class="flip-card h-64 md:h-72 lg:h-80">
                            <div class="flip-card-inner">
                                <!-- Front -->
                                <div class="flip-card-front relative">
                                    <img src="{{ asset('storage/'.$project->image) }}" 
                                         alt="{{ $project->name }}" 
                                         class="w-full h-full object-cover rounded-lg">
                                    <div class="absolute bottom-0 left-0 right-0 bg-gray-900 bg-opacity-70 p-4 rounded-b-lg">
                                        <h3 class="text-xl font-semibold text-white break-words">{{ $project->name }}</h3>
                                    </div>
                                </div>

                                <!-- Back -->
                                <div class="flip-card-back bg-gray-900 flex flex-col justify-start items-start p-4 overflow-y-auto text-left text-gray-400">
                                    <h3 class="text-xl font-semibold text-white break-words whitespace-normal mb-2">
                                        {{ $project->name }}
                                    </h3>
                                    <p class="mb-2 break-words whitespace-normal">{{ $project->description }}</p>
                                    <p class="text-indigo-400 mb-2">Tech Stack: {{ $project->tech_stack }}</p>
                                    <p class="text-indigo-300 mb-2">Tier: {{ ($project->project_tier) }}</p>
                                    @if($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" class="text-indigo-500 hover:underline mt-2">
                                            View Demo
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</div>
