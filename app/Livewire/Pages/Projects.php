<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Project;
use App\Enums\ProjectTier;
class Projects extends Component
{
    public $projects;
    public $filter = "all";

    public function mount()
    {
        $this->loadProjects();
    }

    public function loadProjects()
    {
        $this->projects = $this->filter === 'all'
            ? Project::all()
            : Project::where(
                'project_tier',
                ProjectTier::from($this->filter)->value
              )->get();
    }

    public function setFilter($tier)
    {
        $this->filter = $tier;
        $this->loadProjects();
    }

    public function render()
    {
        return view('livewire.pages.projects')->layout('layouts.app');
    }
}
 