@extends('adminlte::page')

@section('title', 'clientes')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
@endsection

@section('content_header')


    <a class="btn btn-success btn-sm float-right" href="{{route('admin.clientes.create')}}">Nuevo Cliente</a>

    <h1>Lista de clientes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="clientes" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Nombre</th>
                        <th>Apellido</th>
                        {{-- <th>Direccion</th> --}}
                        <th>Cedula</th>
                        {{-- <th>Edad</th>
                        <th>Telefono</th> --}}
                        <th>Email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            {{-- <td>{{$cliente->id}}</td> --}}
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            {{-- <td>{{$cliente->direccion}}</td> --}}
                            <td>{{$cliente->cedula}}</td>
                            {{-- <td>{{$cliente->edad}}</td>
                            <td>{{$cliente->telefono}}</td> --}}
                            <td>{{$cliente->email}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.clientes.edit', $cliente)}}"><i class="fas fa-pen-fancy"></i></a>
                            </td>
                           <td>
                                <button class="btn btn-info btn-sm" type="submit"> + Mascota</button>
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#clientes').DataTable({
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