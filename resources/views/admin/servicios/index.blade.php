@extends('adminlte::page')

@section('title', 'Dashboard')

@section ('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 @endsection

@section('content_header')

     @can('admin.servicios.create') 
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.servicios.create')}}">Agregar Servicio</a>
     @endcan 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
            <table id="usuarios" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Duracion</th>
                        <th>Estado</th>
                        <th>Opciones</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>

                            <th>{{$servicio->id}}</th>
                            <th>{{$servicio->nombre_servicio}}</th>
                            <th>{{$servicio->descripcion}}</th>
                            <th>{{$servicio->duracion}}</th>
                            <td>

                                @if($servicio->estado == '2')
                                <span class="btn btn-danger"><i class="bi bi-toggle-off"></i></span>
                                @else
                                <span class="btn btn-success"><i class="bi bi-toggle-on"></i></span>
                                @endif

                            </td>


                          

                            <td width= "10px">
                                @can('admin.servicios.edit')
                                    <a class="btn btn-info " href="{{route('admin.servicios.edit', $servicio)}}"><i class="bi bi-pencil-square"></i></a>
                                                           

                                @endcan
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
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable({
        responsive: true,
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
