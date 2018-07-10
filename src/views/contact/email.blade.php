@component('mail::message')
#Introduction

This query is from {{ $name }}.
Message:
{{ $message }}
<!-- body part is actual message display retrieved from contactmailable  -->
@component('mail::button', ['url'=> ''])
Button Text
@endcomponent


Thanks,<br>
{{config('app.name')}}
@endcomponent