<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\Contact\ContactData;
use App\Services\ContactService;
use App\Services\CaptchaService;

class Contact extends Component
{
    public string $name = '';
    public string $email = '';
    public ?string $contactNumber = null;
    public string $message = '';

    public string $captchaInput = '';
    public string $captchaQuestion = '';

    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
        'captchaInput' => 'required|string',
    ];
    public function generateCaptcha(CaptchaService $captcha)
    {
        $data = $captcha->generate();
        $this->captchaQuestion = $data['question'];
        $this->captchaInput = '';
    }

    public function mount(CaptchaService $captcha)
    {
        $this->generateCaptcha($captcha);
    }

    public function submit(ContactService $service, CaptchaService $captcha)
    {
        $this->validate();

        if(!$captcha->verify($this->captchaInput)) 
        {
            $this->addError('captchaInput', 'Captcha answer is incorrect.');
            $this->generateCaptcha($captcha);
            $this->captchaInput = '';
            return;
        }

        $dto = new ContactData(
            $this->name,
            $this->email,
            $this->contactNumber,
            $this->message
        );

        $service->send($dto);

        $this->reset(['name', 'email', 'contactNumber', 'message', 'captchaInput']);
        session()->flash('success', 'Message sent successfully!');

        $this->generateCaptcha($captcha);

    }


    public function render()
    {
        return view('livewire.pages.contact')->layout('layouts.app');
    }
}
