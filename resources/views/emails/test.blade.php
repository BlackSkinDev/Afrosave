@component('mail::message')
# Introduction
Testing queue worker AWS
Email time - {{$time}}.

@component('mail::button', ['url' => ''])
Queue test
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
