@extends('layouts.app')

@section('content')
<div class="container">

    <div class="center">
        <h3 class="grey-text text-darken-3">Hola bienvenido</h3>
        {{ Form::open(['route' => 'login']) }}
            <div class="row">
                <div class="col m8 s12 offset-m2">
                    <div class="input-field">
                        {{ Form::label('email', 'Correo electrónico') }}
                        {{ Form::email('email', null, ['autofocus']) }}
                    </div>
                    <div class="input-field">
                        {{ Form::label('password', 'Contraseña') }}
                        {{ Form::password('password', null) }}
                    </div>

                    <div class="input-field left-align">
                        <p >
                            <label>
                                {{ Form::checkbox('remember', 'remember') }}
                                <span>Recuerdame</span>
                            </label>
                        </p>
                    </div>

                    <div class="input-field left-align">
                        {{ Form::submit('Login', ['class' => 'btn orange darken-3']) }}
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection
