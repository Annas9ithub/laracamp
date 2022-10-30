{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}


@component('mail::message')
# welcome!

Hi {{ $user->name }}
<br>
Welcome to laracamp, your account has been created succesfully.Now you can choose your best match camp!

The body of your message.

@component('mail::button', ['url'=>route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent