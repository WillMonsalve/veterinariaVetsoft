@extends('adminlte::page')

@section('title', 'Dashboard')

@section ('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 @endsection

@section('content_header')
    
    @can('admin.servicios.create')
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.servicios.create')}}">Agregar Servicio</a>
    @endcan

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
                        <th>Precio</th>
                        <th>Duracion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>
                            <th>{{$servicio->id}}</th>
                            <th>{{$servicio->nombre}}</th>
                            <th>{{$servicio->precio}}</th>
                            <th>{{$servicio->duracion}}</th>
                            
                            <th width= "10px">
                                @can('admin.servicios.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit', $servicio)}}">Editar</a>
                                @endcan
                            </th>
                            <th width= "10px">
                                @can('admin.servicios.destroy')
                                    <form action="{{route('admin.servicios.destroy', $servicio)}}" method="POST">
                                        @csrf                                
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </th>
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
        autoWidth: false
    });
</script>
@endsection