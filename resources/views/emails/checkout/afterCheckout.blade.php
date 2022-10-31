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
Register Camp  {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank you register on <b> {{ $checkout->Camp->title }} </b>, please see payment instruction by click the button below.

{{-- @component('mail::button', ['url'=>route('user.checkout.invoice', $checkout->id)]) --}}
@component('mail::button', ['url'=>route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
