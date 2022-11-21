@extends('adminlte::page')

@section('title', 'Lista de agendas')

@section ('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 @endsection

 @section('content_header')
 @section ('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 @endsection

@can('admin.servicios.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.agendas.create')}}">Horario <i class="bi bi-calendar-plus"></i></a>
@endcan
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<h1>Lista de agenda</h1>
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
                    <th>Usuario</th>
                        <th>Fecha inicio</th>
                        <th>Fecha final</th>
                        <th>Hora inicio</th>
                        <th>hora intermedia mañana</th>
                        <th>hora intermedia tarde</th>
                        <th>Hora final</th>
                        <th>Opciones</th>
                       
                    </tr>
                </thead>

                <tbody>
            
                        @foreach ($agendas as $agenda)
                        <tr> 
                            <th>{{$agenda->id}}</th>
                            <th>{{$agenda->user_id->name}}</th>
                            <th>{{$agenda->fecha_inicio}}</th>
                            <th>{{$agenda->fecha_final}}</th>
                            <th>{{$agenda->hora_inicio}}</th>
                            <th>{{$agenda->hora_intermedia_mañana}}</th>
                            <th>{{$agenda->hora_intermedia_tarde}}</th>
                            <th>{{$agenda->hora_final}}</th>
                            
                           

                            <td width="10px">
                               <form action="{{route('admin.agendas.destroy', $agenda)}}" method="POST">
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

