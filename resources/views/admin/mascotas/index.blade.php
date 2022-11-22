@extends('adminlte::page')

@section('title', 'mascotas')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
@endsection

@section('content_header')

    <a class="btn btn-success btn-sm float-right" href="{{route('admin.mascotas.create')}}">Nueva mascota</a>

    <h1>mascota</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="mascotas" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Nombre</th>
                        <th>Raza</th>
                        <th>Especie</th>
                        <th>Propietario</th>
                        <th>Editar</th>
                        <th>Ver</th>
                        <th>Acción</th>

                    </tr>
                </thead>

                <tbody>
                                           
                    @foreach ($mascotas as $mascota)
                   
                    <tr>
                            {{-- <td>{{$cliente->id}}</td> --}}
                            <td>{{$mascota->nombre}}</td>
                            <td>{{$mascota->raza}}</td>
                            <td>{{$mascota->especie}}</td>
                            <td>{{$mascota->cliente_id}}</td>
                            
                            <td>
                               <a class="btn btn-primary btn-sm" href="{{route('admin.mascotas.edit', $mascota)}}"><i class="bi bi-pen"></i></a>
                            </td>
                                                                                    
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{route('admin.mascotas.show', $mascota)}}"><i class="bi bi-eye"></i></a>
                            </td>
                            
                            <td>
                               <form action="{{route('admin.clientes.destroy', $mascota)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-success btn-sm" type="submit">Activo</button>
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
    $('#mascotas').DataTable({
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