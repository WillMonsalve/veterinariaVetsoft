@extends('adminlte::page')

@section('title', 'usuarios')

@section ('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')

    <a class="btn btn-success float-right" href="{{route('admin.users.create')}}">Crear Usuario</a>
    <h1>Lista de usuarios</h1>
    
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div>
        <div class="card">
    
            <div class="card-body">
                <table id="users" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            {{--  <th>ID</th> --}}
                            <th>Nombre</th>
                            <th>Apellido</th>
                            {{-- <th>Dirección</th> --}}
                            <th>Cédula</th>
                            {{-- <th>Edad</th>
                            <th>Teléfono</th> --}}
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Editar</th>
                            <th>Ver</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                {{-- <td>{{$user->id}}</td> --}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellido }}</td>
                                {{-- <td>{{ $user->direccion }}</td> --}}
                                <td>{{ $user->cedula }}</td>
                                {{-- <td>{{ $user->edad }}</td>
                                <td>{{ $user->telefono }}</td> --}}
                                <td>{{ $user->email }}</td>
                                <td>
                                    @forelse ($user->roles as $role)
                                      <span class="badge badge-info">{{ $role->name }}</span>
                                    @empty
                                      <span class="badge badge-danger">No roles</span>
                                    @endforelse
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}"><i class="fas fa-pen-fancy"></i></a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.users.show', $user) }}"><i class="bi bi-eye"></i></a>
                                </td>
                                <td>
    
                                    @if($user->status == '1')
                                        <span class="btn btn-success"><i class="bi bi-toggle-on"></i></span>
                                    @else
                                        <span class="btn btn-danger"><i class="bi bi-toggle-off"></i></span>
                                    @endif
    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
    
                </table>
            </div>
        </div>
    </div>

    {{-- @livewire('admin.users-index') --}}
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#users').DataTable({
        responsive: true,
        autoWidth: false,

        "language": {
                
                "zeroRecords": "Nada encontrado - disculpa",
                
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de MAX registros totales)",
                'search': 'Buscar:',
                'paginate':{
                    'next':'Siguiente',
                    'previous':'Anterior'
                }
            }
    });
</script>
@endsection


