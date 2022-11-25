@extends('adminlte::page')

@section('title', 'usuarios')

    @section('css')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @endsection

@section('content_header')
    {{-- <a class="btn btn-success btn-sm float-right" href="{{route('admin.users.create', $user)}}">Agregar Rol</a> --}}
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop


{{-- @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>
    <script>

    $(document).ready(function () {
        $('#users').DataTable({
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
    });
        
        
    </script>
@stop --}}