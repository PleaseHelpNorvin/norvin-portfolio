<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ProjectCreatePage extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $tech_stack;
    public $demo_url;
    public $image;
    public $project_tier;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'project_tier' => 'required|in:basic,intermediate,advanced',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;

        if ($this->image) {
            $imagePath = $this->image->store('projects', 'public'); // store in storage/app/public/projects
        }

        Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'tech_stack' => $this->tech_stack,
            'demo_url' => $this->demo_url,
            'project_tier' => $this->project_tier,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Project created successfully!');
        $this->reset(['name','description','tech_stack','demo_url', 'image']);
    }

    public function render()
    {
        return view('livewire.admin.project-create-page')
            ->layout('layouts.app');
    }
}
