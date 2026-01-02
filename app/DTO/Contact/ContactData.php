<?php

namespace App\DTO\Contact;

class ContactData {
    public string $name;
    public string $email;
    public ?string $contactNumber;
    public string $message;

    public function __construct(string $name, string $email, ?string $contactNumber = null, string $message) {
        $this->name = $name;
        $this->email = $email;
        $this->contactNumber = $contactNumber;
        $this->message = $message;
    }

    public function toArray(): array {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'contactNumber' => $this->contactNumber,
            'message'=> $this->message,
        ];
    }
}