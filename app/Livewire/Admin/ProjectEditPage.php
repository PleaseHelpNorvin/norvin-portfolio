<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class ProjectEditPage extends Component
{
    use WithFileUploads;

    public $project;
    public $name;
    public $description;
    public $tech_stack;
    public $demo_url;
    public $project_tier;
    public $image;

    public function mount($id) {
        $this->project = Project::findOrFail($id);

        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->tech_stack = $this->project->tech_stack;
        $this->demo_url = $this->project->demo_url;
        $this->project_tier = $this->project->project_tier->value;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string|max:255',
            'demo_url' => 'nullable|url|max:255',
            'project_tier' => 'required|in:basic,intermediate,advanced',
            'image' => 'nullable|image|max:2048', // optional
        ]);

        // handle image if uploaded
        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
            'tech_stack' => $this->tech_stack,
            'demo_url' => $this->demo_url,
            'project_tier' => $this->project_tier,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('projects', 'public');
        }

        $this->project->update($data);

        session()->flash('message', 'Project updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.project-edit-page')->layout('layouts.app');
    }
}
