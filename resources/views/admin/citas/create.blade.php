@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Registrar Nueva Cita</h1>
@stop


@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.citas.store']) !!}

                <div class="form-group">
                    {!! Form::label('estado', 'Estado') !!}
                    {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}

                    @error('estado')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'Fecha']) !!}

                    @error('fecha')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('hora', 'Tiempo') !!}
                    {!! Form::time('hora', null, ['class' => 'form-control', 'placeholder' => 'Hora']) !!}

                    @error('hora')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('servicio', 'Servicio') !!}
                    {!! Form::number('servicio', null, ['class' => 'form-control', 'placeholder' => 'Servicio']) !!}

                    @error('servicio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('cliente', 'Cliente') !!}
                    {!! Form::text('cliente', null, ['class' => 'form-control', 'placeholder' => 'Cliente']) !!}

                    @error('cliente')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Crear Cita', ['class' => 'btn btn-primary']) !!}

                <th width="30px">
                    <a class="btn btn-danger btn-sm float-right" href="{{route('admin.citas.index')}}">Regresar</a>
                </th>
            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#permalink',
                space: '-'
            });
        });
    </script>

@endsection
