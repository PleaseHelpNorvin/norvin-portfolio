<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public $projects = [];

    public function mount()
    {
        $this->projects = Project::all(); // directly get all projects
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return redirect()->route('admin.projects.edit', $project->id);

    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        session()->flash('message', 'Project deleted successfully!');
        $this->projects = Project::all(); // refresh list
    }

    public function render()
    { 
        return view('livewire.admin.projects')->layout('layouts.app');
    }
}
