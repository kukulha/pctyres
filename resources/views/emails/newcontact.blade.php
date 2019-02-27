@component('mail::message')
# Nuevo mensaje desde la pagina web


**Nombre**   	{{ $data->name }} {{ $data->last_name }}

**Correo** 		{{ $data->email }}

**Teléfono** 	{{ $data->phone }}

**Empresa** 	{{ $data->company }}

**Ciudad** 		{{ $data->city }}

**Puesto**		{{ $data->job }}

**Mensaje**		{{ $data->body }}
                  


@component('mail::button', ['url' => "mailto:{{ $data->email }}"])
Enviar mensaje
@endcomponent

@endcomponent
