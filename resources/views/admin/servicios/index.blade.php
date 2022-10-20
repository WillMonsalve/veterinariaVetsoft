@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    @can('admin.servicios.create')
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.servicios.create')}}">Agregar Servicio</a>
    @endcan

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
                        <th>Precio</th>
                        <th>Duracion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>
                            <th>{{$servicio->id}}</th>
                            <th>{{$servicio->nombre}}</th>
                            <th>{{$servicio->precio}}</th>
                            <th>{{$servicio->duracion}}</th>
                            
                            <th width= "10px">
                                @can('admin.servicios.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit', $servicio)}}">Editar</a>
                                @endcan
                            </th>
                            <th width= "10px">
                                @can('admin.servicios.destroy')
                                    <form action="{{route('admin.servicios.destroy', $servicio)}}" method="POST">
                                        @csrf                                
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </th>
                        </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
