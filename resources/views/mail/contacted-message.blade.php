@component('mail::message')
# Hi, there

Someone contacted you with this message:

"{{ $message }}"

Maybe, you would like to get in touch, use this shared email: {{ $email }}

@endcomponent
