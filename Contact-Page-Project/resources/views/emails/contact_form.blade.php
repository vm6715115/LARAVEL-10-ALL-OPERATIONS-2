@component('mail::message')
# New Contact Form Submission

**Name:** {{ $validatedData['name'] }}

**Email:** {{ $validatedData['email'] }}

**Message:**
{{ $validatedData['message'] }}
@endcomponent
