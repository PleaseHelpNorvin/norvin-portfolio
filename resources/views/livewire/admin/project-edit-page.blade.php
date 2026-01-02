<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <section class="py-10 bg-gray-950">
        <div class="max-w-6xl mx-auto p-4 md:p-8 grid grid-cols-1 items-center">

            <!-- Livewire Form -->
            <form wire:submit.prevent="submit" class="space-y-5 w-full" enctype="multipart/form-data">
                
                <!-- Project Image -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Project Image</label>
                    <input type="file" wire:model="image"
                        class="w-full p-3 rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <!-- Preview -->
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded" alt="Preview">
                    @elseif($project && $project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="mt-2 w-32 h-32 object-cover rounded" alt="Current Image">
                    @endif
                </div>

                <!-- Project Name -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Project Name</label>
                    <input type="text" wire:model="name" placeholder="Enter project name"
                           class="w-full p-3 rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Description</label>
                    <textarea wire:model.defer="description" placeholder="Describe the project"
                              class="w-full p-3 rounded bg-gray-800 text-white h-24 resize-none focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Tech Stack -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Tech Stack</label>
                    <input type="text" wire:model="tech_stack" placeholder="E.g. Laravel, Vue, Tailwind"
                           class="w-full p-3 rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    @error('tech_stack') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Demo URL -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Demo URL</label>
                    <input type="url" wire:model="demo_url" placeholder="https://example.com"
                           class="w-full p-3 rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    @error('demo_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Project Tier -->
                <div>
                    <label class="block text-gray-300 font-medium mb-1">Project Tier</label>
                    <select wire:model="project_tier"
                            class="w-full p-3 rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">Select Tier</option>
                        <option value="basic">Basic</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                    @error('project_tier') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4 mt-4">
                    <button type="submit"
                            class="flex-1 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-lg transition-colors text-center">
                        Update Project
                    </button>

                    <a wire:navigate href="{{ route('admin.projects') }}"
                       class="flex-1 py-3 bg-gray-700 hover:bg-gray-600 text-white font-semibold rounded-lg transition-colors text-center">
                        Cancel
                    </a>
                </div>

                <!-- Success Message -->
                @if (session()->has('message'))
                    <p class="text-green-400 mt-2 text-center">{{ session('message') }}</p>
                @endif

            </form>

        </div>
    </section>
</div>
