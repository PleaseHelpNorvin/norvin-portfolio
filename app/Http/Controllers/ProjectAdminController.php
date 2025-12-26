<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;

class ProjectAdminController extends Controller
{
    public function allProjects()
    {
        return Project::all();
    }

    public function getProject($slug)
    {
        return Project::where('slug', $slug)->firstOrFail();
    }

    public function store(array $data)
    {
        // Extra validation in controller
        $validated = validator($data, [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'required|string|max:255',
            'demo_url' => 'nullable|url',
        ])->validate();

        // dd($validated);

        return Project::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'tech_stack' => $validated['tech_stack'],
            'demo_url' => $validated['demo_url'] ?? null,
            'slug' => Str::slug($validated['name']),
        ]);
    }
}
