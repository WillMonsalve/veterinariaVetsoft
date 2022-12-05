@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Nuevo permiso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.permissions.store']) !!}
                
                @include('admin.permissions.partials.form')
               
                {!! Form::submit('Crear permiso', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop