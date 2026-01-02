<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Projects</h1>

    <a wire:navigate href="{{ route('admin.projects.create') }}" class="bg-white text-black px-3 py-2 rounded mb-4 inline-block">
        Add New Project
    </a>

    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200 text-black">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->id }}</td>
                    <td class="border px-4 py-2">{{ $project->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-blue-600">Edit</a>
                        <button wire:click="deleteProject({{ $project->id }})"  class="text-red-600 ml-2">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border px-4 py-2 text-center">No projects yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if (session()->has('message'))
        <p class="text-green-400 mt-2 text-center">{{ session('message') }}</p>
    @endif
</div>
