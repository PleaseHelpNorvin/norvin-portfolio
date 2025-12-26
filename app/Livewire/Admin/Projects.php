<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Http\Controllers\ProjectAdminController;

/**
 * @method \Illuminate\View\View layout(string $layout)
 */
class Projects extends Component
{
    public $projects = [];

    

    public function mount()
    {
        $controller = new ProjectAdminController();
        $this->projects = $controller->allProjects();
        // dd($this->projects = $controller->allProjects());
    }

    public function render()
    { 
        return view('livewire.admin.projects')->layout('layouts.app');
    }
}
