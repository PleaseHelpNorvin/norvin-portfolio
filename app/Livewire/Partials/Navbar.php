<?php

namespace App\Livewire\Partials;

use Illuminate\Support\Facades\Redirect;
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

    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('home');
    }


    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
