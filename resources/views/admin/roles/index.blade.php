@extends('adminlte::page')

@section('title', 'Roles')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
@endsection

@section('content_header')

    <a class="btn btn-success btn-sm float-right" href="{{route('admin.roles.create')}}">Nuevo rol</a>

    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif

    <div class="card">
        <div class="card-body">

            <table id="roles" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Permisos</th>
                        <th>Editar</th>
                        <th>Ver</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                @forelse ($role->permissions as $permission)
                                    <span class="badge badge-info">{{ $permission->description }}</span>
                                @empty
                                    <span class="badge badge-danger">No tiene permisos agregados</span>
                                @endforelse
                            </td>

                            <td width="10px">
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-sm btn-primary"><i class="fas fa-pen-fancy"></i></a>
                            </td>

                            <td width="10px">
                                <a href="{{route('admin.roles.show', $role)}}" class="btn btn-sm btn-warning"><i class="bi bi-eye"></i></a>
                            </td>

                            <td width="10px">
                               <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></button>
                               </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#roles').DataTable({
            responsive:true,
            autoWidth: false,
        
            "language": {
                "lengthMenu": "Mostrar MENU registros por página",
                "zeroRecords": "Nada encontrado - disculpa",
                "info": "Mostrando la página PAGE de PAGES",
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
@stop