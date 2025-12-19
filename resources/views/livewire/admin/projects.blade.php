<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Projects</h1>

    <a href="{{ route('admin.projects.create') }}" class="bg-black text-white px-3 py-2 rounded mb-4 inline-block">
        Add New Project
    </a>

    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->id }}</td>
                    <td class="border px-4 py-2">{{ $project->title }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-blue-600">Edit</a>
                        <form method="POST" action="{{ url('/admin/projects/'.$project->id) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border px-4 py-2 text-center">No projects yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
