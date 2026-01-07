<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\Contact\ContactData;
use App\Services\ContactService;
use App\Services\CaptchaService;

class Contact extends Component
{
    // Form fields
    public string $name = '';
    public string $email = '';
    public ?string $contactNumber = null;
    public string $message = '';

    // Captcha
    public string $captchaInput = '';
    public string $captchaQuestion = '';

    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
        'captchaInput' => 'required|string',
    ];

    public function mount(CaptchaService $captcha)
    {
        $this->setCaptcha($captcha);
    }

    /**
     * SAFE: service resolved per request
     */
    protected function setCaptcha(CaptchaService $captcha): void
    {
        $data = $captcha->generate();
        $this->captchaQuestion = $data['question'];
        $this->captchaInput = '';
    }

    /**
     * Called by wire:click
     */
    public function generateCaptcha()
    {
        $this->setCaptcha(app(CaptchaService::class));
    }

    /**
     * Called by wire:submit
     */
    public function submit(ContactService $service)
    {
        $this->validate();

        $captcha = app(CaptchaService::class);

        if (! $captcha->verify($this->captchaInput)) {
            $this->addError('captchaInput', 'Captcha answer is incorrect.');
            $this->setCaptcha($captcha);
            return;
        }

        $service->send(new ContactData(
            $this->name,
            $this->email,
            $this->contactNumber,
            $this->message
        ));

        session()->flash('success', 'Message sent successfully!');
        return redirect()->route('contact');
    }

    public function render()
    {
        return view('livewire.pages.contact')
            ->layout('layouts.app');
    }
}
