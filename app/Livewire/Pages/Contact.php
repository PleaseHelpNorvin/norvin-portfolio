<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\Contact\ContactData;
use App\Services\ContactService;

class Contact extends Component
{
    public string $name = '';
    public string $email = '';
    public ?string $contactNumber = null;
    public string $message = '';

    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit(ContactService $service)
    {
        $this->validate();

        $dto = new ContactData(
            $this->name,
            $this->email,
            $this->contactNumber,
            $this->message
        );

        $service->send($dto);

        $this->reset();
        session()->flash('success', 'Message sent successfully!');
    }


    public function render()
    {
        return view('livewire.pages.contact')->layout('layouts.app');
    }
}
