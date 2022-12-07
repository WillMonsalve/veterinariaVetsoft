@extends('adminlte::page')

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('title', 'Citas')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <p class="card-category">Detalle Cita</p>
                    </div>
                    {{-- body --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-cliente">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="author">

                                            <a href="#">
                                                <img width="220px" src="{{ asset('/img/avatarDefault.jpg') }}"
                                                    alt="image" class="avatar">
                                                <h5 class="title mt-3">Datos</h5>
                                            </a>
                                            <p class="descripcion">


                                            <h6>Cliente</h6>{{ $cita->cliente_id }} <br>
                                            <h6>Servicio</h6>{{ $cita->servicio_id }} <br>
                                            <h6>Fecha</h6>{{ $cita->agenda_id }} <br>
                                            <h6>Hora</h6>{{ $cita->hora_id }} <br><br>
                                            <h6>Estado</h6>
                                            @if ($cita->estado == '2')
                                                <span class="btn-danger">Cancelada</span>
                                            @else
                                                <span class="bi bi-toggle-on btn btn-success">Activo</span>
                                            @endif
                                            <br>


                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('admin.citas.index') }}" class="btn btn-sm btn-danger mr-3">
                                                Regresar </a>
                                            <a href="{{ route('admin.citas.edit', $cita) }}"
                                                class="btn btn-sm btn-primary mr-3"> Editar </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

                    {{-- @section('content')
    @livewire('admin.clientes.index')
@stop --}}
