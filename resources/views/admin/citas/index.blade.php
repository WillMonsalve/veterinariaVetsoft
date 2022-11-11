@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    {{--  @can('admin.citas.create')
        <a class="btn btn-success btn-sm float-right" href="{{route('admin.citas.create')}}">Crear Cita</a>
    @endcan  --}}

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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Servicio</th>
                        <th>Cliente</th>
                        <th colspan="2"></th>


                        <th>
                            <a class="btn btn-success btn-sm float-right" href="{{route('admin.citas.create')}}">Crear Cita</a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            <th>{{$cita->id}}</th>
                            <th>{{$cita->estado}}</th>
                            <th>{{$cita->fecha}}</th>
                            <th>{{$cita->hora}}</th>
                            <th>{{$cita->servicio_id}}</th>
                            <th>{{$cita->cliente_id}}</th>




                            <th width= "10px">
                                //@can('admin.citas.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.citas.edit', $cita)}}">Editar</a>
                                //@endcan
                            </th>
                            <th width= "10px">
                                //@can('admin.citas.destroy')
                                    <form action="{{route('admin.cita.destroy', $cita)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                //@endcan
                            </th>
                        </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
