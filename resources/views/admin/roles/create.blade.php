@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Crear Nuevo Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}
                
                @include('admin.roles.partials.form')
               
                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.roles.index')}}" >Volver</a>

            {!! Form::close() !!}

        </div>
    </div>
@stop

