<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->route('admin.projects');
        }

        $this->addError('email','Invalid credentials.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.app');
    }
}
