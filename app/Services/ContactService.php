<?php

namespace App\Services;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\DTO\Contact\ContactData;

class ContactService {

    public function send(ContactData $data): void
    {
        Mail::to(config('mail.from.address'))
            ->send(new ContactMail($data->toArray()));
    }
}