@extends('adminlte::page')

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('title', 'Detalle Cita')

@section('content_header')
<h1 style="text-align:center">DETALLE CITA</h1>
<div class="card">
    <div class="card-body">

        {!! Form::model($cita, ['route' => ['admin.citas.show', $cita]]) !!}
    <div class="container">
        <div class="form-group col-md-4">

            {!! Form::label('cliente_id', 'Cliente') !!}
            {!! Form::select('cliente_id',$cliente, $cita->cliente_id, ['class' => 'form-control','disabled']) !!}

            @error('cliente_id')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div class="form-group col-md-4">
            {!! Form::label('servicio_id', 'Servicio') !!}
            {!! Form::select('servicio_id',$servicios, $cita->servicio_id, ['class' => 'form-control','disabled']) !!}

            @error('servicio_id')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div class="form-group col-md-4">
            {!! Form::label('agenda_id', 'Fecha') !!}
            {!! Form::select('agenda_id',$horarios, $cita->agenda_id, ['class' => 'form-control','disabled']) !!}

            @error('agenda_id')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div class="form-group col-md-4">
            {!! Form::label('hora_id', 'Hora') !!}
            {!! Form::select('hora_id',$hora, $cita->hora_id, ['class' => 'form-control','disabled']) !!}

            @error('hora_id')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <select class="form-control" name="estado" id="estado" disabled>
                    <option value="1">Activo</option>
                    <option value="2">Cancelada</option>
                </select>
            </div>

            {!! Form::close() !!}


            <td>
                <a class="btn btn-danger" href="{{route('admin.citas.index')}}">Regresar</a>
            </td>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

                    {{-- @section('content')
    @livewire('admin.clientes.index')
@stop --}}
