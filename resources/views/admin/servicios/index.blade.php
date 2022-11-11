@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.servicios.create')
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.servicios.create')}}">Agregar Servicio</a>
    @endcan
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <h1>Lista de Servicios</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Duracion</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>
                            <th>{{$servicio->id}}</th>
                            <th>{{$servicio->nombre}}</th>
                            <th>{{$servicio->descripcion}}</th>
                            <th>{{$servicio->duracion}}</th>
                            <td>
                                @if($servicio->estado == '2')
                                <span class="btn btn-danger"><i class="bi bi-toggle-off"></i></span>
                                @else
                                <span class="btn btn-success"><i class="bi bi-toggle-on"></i></span>
                                @endif

                            </td>

                            <th width= "10px">
                                @can('admin.servicios.edit')
                                    <a class="btn btn-success " href="{{route('admin.servicios.edit', $servicio)}}"><i class="bi bi-pencil-square"></i></a>
                                @endcan
                            </th>
                           
                        </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
