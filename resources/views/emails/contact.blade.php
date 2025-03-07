@component('mail::message')@component('mail::message')
# New Contact Form Submission
# New Contact Form Submission

**Name:** {{ $name }}  **Name:** {{ $name }}  
**Email:** {{ $email }} **Email:** {{ $email }}   

**Message:**  **Message:**  
{{ $messageContent }}

Thanks,  
{{ $messageContent }}

Thanks,  
**{{ config('app.name') }} Support**  **{{ config('app.name') }} Support**  

@component('mail::button', ['url' => route('home')])
Visit {{ config('app.name') }}
@endcomponent
@endcomponent