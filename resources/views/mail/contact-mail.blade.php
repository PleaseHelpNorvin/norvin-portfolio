<x-mail::message>
# 📩 New Contact Message

---

### 👤 Sender Details
- **Name:** {{ $data['name'] }}
- **Email:** {{ $data['email'] }}
- **Contact:** {{ $data['contactNumber'] ?? 'N/A' }}

---

### 💬 Message
> {{ $data['message'] }}

---

<x-mail::panel>
This message was sent from your portfolio contact form.
</x-mail::panel>

Thanks,  
**{{ config('app.name') }}**
</x-mail::message>
