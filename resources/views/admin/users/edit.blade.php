@extends('adminlte::page')

@section('title', 'usuarios')

@section('content_header')
    <h1>Edita Usuario</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
                        
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'autocomplete' => 'off', 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
                
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('apellido', 'Apellido') !!}
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido']) !!}
                
                    @error('apellido')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('direccion', 'Dirección') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección del domicilio']) !!}
                
                    @error('direccion')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('cedula', 'Cédula') !!}
                    {!! Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
                
                    @error('cedula')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::number('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
                
                    @error('edad')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('telefono', 'Teléfono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
                
                    @error('telefono')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Correo electrónico') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
                
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <h2 class="h5">Asignar rol</h2>
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop
 