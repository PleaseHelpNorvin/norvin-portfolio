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
        $this->projects = Project::all();
    }

    public function loadProjects()
    {
        if ($this->filter === 'all') {
            $this->projects = Project::all();
        } else {
            $tierEnum = ProjectTier::from($this->filter);
            $this->projects = Project::where('project_tier', $tierEnum->value)->get();
        }
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
 