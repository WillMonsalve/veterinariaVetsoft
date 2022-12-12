@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.roles.index')}}" >Volver</a>

            {!! Form::close() !!}

        </div>
    </div>
@stop

