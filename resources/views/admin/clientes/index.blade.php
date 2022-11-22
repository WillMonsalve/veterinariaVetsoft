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

    <h1>clientes</h1>
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
                        <th>Cédula</th>
                        {{-- <th>Edad</th>
                        <th>Telefono</th>
                        <th>Email</th> --}}
                        <th>Editar</th>
                        <th>Adicionar</th>
                        <th>Ver</th>
                        <th>Acción</th>

                    </tr>
                </thead>

                <tbody>
                    {{-- <tfoot> --}}
                        
                    @foreach ($clientes as $cliente)
                   
                    <tr>
                            {{-- <td>{{$cliente->id}}</td> --}}
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            {{-- <td>{{$cliente->direccion}}</td> --}}
                            <td>{{$cliente->cedula}}</td>
                            {{-- <td>{{$cliente->edad}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->email}}</td> --}}
                            <td>
                               <a class="btn btn-primary btn-sm" href="{{route('admin.clientes.edit', $cliente)}}"><i class="bi bi-pen"></i></a>
                            </td>
                            
                            <td>
                                <input type ='button' class="btn btn-info btn-sm"  value = '+ Mascota' onclick="location.href = '{{ route('admin.mascotas.index')}}'"/>
                            </td>
                            
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{route('admin.clientes.show', $cliente)}}"><i class="bi bi-eye"></i></a>
                            </td>
                            
                            <td>
                               <form action="{{route('admin.clientes.destroy', $cliente)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-success btn-sm" type="submit">Activo</button>
                               </form>
                            </td>
                        </tr>                                     
                      @endforeach
                    {{-- </tfoot> --}}
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
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
    });
</script>
@endsection