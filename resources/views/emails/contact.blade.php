@component('mail::message')
# New Contact Form Submission

**Name:** {{ $name }}  
**Email:** {{ $email }}  

**Message:**  
{{ $messageContent }}

Thanks,  
**{{ config('app.name') }} Support**  

@component('mail::button', ['url' => route('home')])
Visit {{ config('app.name') }}
@endcomponent
@endcomponent