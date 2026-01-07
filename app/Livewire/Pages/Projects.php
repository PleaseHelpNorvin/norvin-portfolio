<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Project;
use App\Enums\ProjectTier;
use Illuminate\Support\Facades\Log;

class Projects extends Component
{
    public $projects = [];
    public $filter = 'all'; // default filter

    public function mount()
    {
        $this->loadProjects();
    }

    // Called automatically when $filter changes
    public function updatedFilter()
    {
        Log::info('Filter changed to: ' . $this->filter);

        $this->loadProjects();
    }

    public function loadProjects()
    {
        if ($this->filter === 'all') {
            $this->projects = Project::all();
        } else {
            $tierValue = ProjectTier::tryFrom($this->filter)?->value;
            $this->projects = $tierValue
                ? Project::where('project_tier', $tierValue)->get()
                : collect(); // empty collection if enum fails
        }
    }

    public function render()
    {
        return view('livewire.pages.projects')->layout('layouts.app');
    }
}
