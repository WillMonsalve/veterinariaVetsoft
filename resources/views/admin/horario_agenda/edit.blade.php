@extends('adminlte::page')

@section('title', 'Editar Horario')

@section('content_header')
    <h1>Editar Horario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

@section('content')

<div class="card">
    <div class="card-body">

        {!! Form::model($horarios, ['route' => ['admin.horario_agenda.update', $horarios], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('id_user', 'Cliente') !!}
            {!! Form::select('id_user',$user, $horaios->id_user, ['class' => 'form-control ','disabled']) !!}

            @error('id_user')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div class="form-group">
            {!! Form::label('id_servi', 'Servicio') !!}
            {!! Form::select('id_servi',$servicios, $horarios->id_servi, ['class' => 'form-control']) !!}

            @error('id_servi')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

            <div class="form-group">
                {!! Form::label('Fecha', 'Fecha') !!}
                {!! Form::date('Fecha', null, ['class' => 'form-control']) !!}

                @error('Fecha')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('Hora_ini', 'Hora Inicio') !!}
                {!! Form::time('Hora_ini', null, ['class' => 'form-control']) !!}

                @error('Hora_ini')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('Hora_fin', 'Hora Final') !!}
                {!! Form::time('Hora_fin', null, ['class' => 'form-control']) !!}

                @error('Hora_fin')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="Estado">Estado</label>
                <select class="form-control" name="Estado" id="Estado">
                    <option value="1">Activo</option>
                    <option value="2">Cancelada</option>
                </select>
            </div>


            {!! Form::submit('Actualizar Horario', ['class' => 'btn btn-primary']) !!}

            <td>
                <a class="btn btn-danger" href="{{route('admin.horario_agenda.index')}}">Regresar</a>
            </td>
        {!! Form::close() !!}
    </div>
</div>

@stop
