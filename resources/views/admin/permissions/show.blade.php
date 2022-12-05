@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Vista detallada del permiso "{{ $permission->description }}"</h1>
@stop

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-cliente">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            
                            <h5 class="title mt-3">{{$permission->description}}</h5>
                            
                            <p class="descripcion">
                                {{ $permission->name }} <br>
                                {{ $permission->description }} <br>
                                {{ $permission->guard_name }} <br>
                                {{ $permission->created_at }} <br>

                            </p>
                        </div>
                        </p>
                        <div class="card-descripcion">
                            lorem ipsum dolor sit amet, consectetur adipisicing elit
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                            <a href="{{ route('admin.permissions.edit', $permission) }}" class="btn btn-sm btn-primary mr-3">
                                Editar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
