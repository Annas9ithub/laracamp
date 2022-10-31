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
Your transaction Has Been Confirmed  

Hi {{ $checkout->User->name }}
<br>
Your transaction has been confirmed, now you can enjoy the benefits of <b> {{ $checkout->Camp->title }} </b> camp.


{{-- @component('mail::button', ['url'=>route('user.checkout.invoice', $checkout->id)]) --}}
@component('mail::button', ['url'=>route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
