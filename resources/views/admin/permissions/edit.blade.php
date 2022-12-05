@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Editar permisos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($permission, ['route' => ['admin.permissions.update', $permission], 'method' => 'put']) !!}

                @include('admin.permissions.partials.form')

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop