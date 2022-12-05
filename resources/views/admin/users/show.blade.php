@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Informacion del usuario</h1>
@stop

@section('content')
    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Apellido</th>
                            <td>{{ $user->apellido }}</td>
                        </tr>
                        <tr>
                            <th>Dirección</th>
                            <td>{{ $user->direccion }}</td>
                        </tr>
                        <tr>
                            <th>Cédula</th>
                            <td>{{ $user->cedula }}</td>
                        </tr>
                        <tr>
                            <th>Edad</th>
                            <td>{{ $user->edad }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono</th>
                            <td>{{ $user->telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><span class="badge badge-primary">{{ $user->email }}</span></td>
                        </tr>
                        <tr>
                            <th>Created at</th>
                            <td><a href="#" target="_blank">{{ $user->created_at }}</a></td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                @forelse ($user->roles as $role)
                                    <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                                @empty
                                    <span class="badge badge-danger bg-danger">No roles</span>
                                @endforelse
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="button-container">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                    <a href={{ route('admin.users.edit', $user) }} class="btn btn-sm btn-primary mr-3"> Editar </a>
                </div>
            </div>
        </div>
    </div>
@stop
