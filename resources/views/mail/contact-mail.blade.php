<x-mail::message>
# Introduction


**Name:** {{ $data['name'] }}<br>
**Email:** {{ $data['email'] }}<br>
**Contact:** {{ $data['contactNumber'] ?? 'N/A' }}

---

**Message:**  
{{ $data['message'] }}

---

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
