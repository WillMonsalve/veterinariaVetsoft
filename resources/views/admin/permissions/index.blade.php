@extends('adminlte::page')

@section('title', 'Permisos')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
@endsection

@section('content_header')
    @can('admin.permissions.create')
        <a class="btn btn-success float-right" href="{{route('admin.permissions.create')}}">Añadir Permiso</a>
    @endcan   

    <h1>Permisos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <p class="card-category">Permisos registrados</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="permissions" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Editar</th>
                                            <th>Ver</th>
                                            <th>Eliminar</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{$permission->id}}</td>
                                                <td>{{$permission->name}}</td>
                                                <td>{{$permission->description}}</td>
                                                <td width="10px">
                                                    @can('admin.permissions.edit')
                                                        <a href="{{route('admin.permissions.edit', $permission)}}" class="btn btn-sm btn-primary"><i class="fas fa-pen-fancy"></i></a>
                                                    @endcan
                                                    
                                                </td>

                                                <td width="10px">
                                                    @can('admin.permissions.show')
                                                        <a href="{{route('admin.permissions.show', $permission)}}" class="btn btn-sm btn-warning"><i class="bi bi-eye"></i></a>
                                                    @endcan
                                                    
                                                </td>
                    
                                                <td width="10px">
                                                    @can('admin.permissions.destroy')
                                                        <form action="{{route('admin.permissions.destroy', $permission)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                        
                                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></button>
                                                       </form>
                                                    @endcan
                                                   
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#permissions').DataTable({
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

