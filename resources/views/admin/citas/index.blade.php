@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
@endsection

@section('content_header')

    {{--  @can('admin.citas.create')
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.citas.create')}}">Crear Cita</a>
    @endcan  --}}

    <a class="btn btn-success btn-sm float-right" href="{{route('admin.citas.create')}}">Crear Cita</a>
    <h1>Lista de Citas</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif


    <div class="card">

        <div class="card-body">
            <table id="citas" class="table table-striped">
                <thead>
                    <tr>
                        {{--  <th>ID</th>  --}}
                        <th>Cliente</th>
                        <th>Servicio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Opciones</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            {{--  <th>{{$cita->id}}</th>  --}}
                            <th>{{$cita->cliente_id}}</th>
                            <th>{{$cita->servicio_id}}</th>
                            <th>{{$cita->Fecha}}</th>
                            <th>{{$cita->Hora}}</th>
                            <th>
                                @if($cita->estado == '2')
                                <span class="btn btn-danger">Inctivo</span>
                                @else
                                <span class="btn btn-success">Activo</span>
                                @endif

                            </th>




                            <th width= "10px">
                                @can('admin.citas.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.citas.edit', $cita)}}">Editar</a>
                                @endcan
                            </th>
                            {{--  <th width= "10px">
                                {{--  @can('admin.citas.destroy')
                                    <form action="{{route('admin.cita.destroy', $cita)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </th> --}}
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
    $('#citas').DataTable({
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
@endsection
