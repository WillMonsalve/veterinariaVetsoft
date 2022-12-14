@extends('adminlte::page')
@section('title', 'Detalles')
@section('content_header')
    <h1>Detalles</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detalles</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detalles as $detalle)
                                    <tr>
                                        <td>{{ $detalle->id }}</td>
                                        <td>{{ $detalle->nombre }}</td>
                                        <td>
                                            <a href="{{ route('detalles.edit', $detalle->id) }}" class="btn btn-primary btn-xs">Editar</a>
                                            <a href="{{ route('detalles.show', $detalle->id) }}" class="btn btn-danger btn-xs">Eliminar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
