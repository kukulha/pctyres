@component('mail::message')
# Hola {{ $data->name }}

##Muchas gracias por tu mensaje, en unos momentos un ejecutivo se comunicara contigo para darle seguimiento a tu petición


Nuevamente Gracias,<br>
{{ config('app.name') }}
@endcomponent
