<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Http\Controllers\ProjectAdminController;

class ProjectCreateForm extends Component
{
    public $name = '';
    public $description = '';
    public $tech_stack = '';
    public $demo_url = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'tech_stack' => 'required|string|max:255',
        'demo_url' => 'nullable|url',
    ];

    public function saveProject()
    {
        // Validate in Livewire first
        $this->validate();

        // Call the controller directly
        app(ProjectAdminController::class)->store([
            'name' => $this->name,
            'description' => $this->description,
            'tech_stack' => $this->tech_stack,
            'demo_url' => $this->demo_url,
        ]);

        session()->flash('message', 'Project added successfully!');

        // Reset form fields
        $this->reset(['name', 'description', 'tech_stack', 'demo_url']);
    }

    public function render()
    {
        return view('livewire.admin.project-create-form')
            ->layout('layouts.app');
    }
}
