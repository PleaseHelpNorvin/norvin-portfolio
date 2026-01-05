<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Navbar extends Component
{
    public bool $mobileOpen = false;

    public function toggleMobile()
    {
        $this->mobileOpen = !$this->mobileOpen;
    }

    public function closeMobile()
    {
        $this->mobileOpen = false;
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
