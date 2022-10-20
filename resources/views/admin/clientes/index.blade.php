@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')

    <a class="btn btn-success btn-sm float-right" href="{{route('admin.clientes.create')}}">Nuevo Cliente</a>

    <h1>Lista de clientes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Cedula</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->cedula}}</td>
                            <td>{{$cliente->edad}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->email}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.clientes.edit', $cliente)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.clientes.destroy', $cliente)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop