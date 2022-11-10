@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Crear Nuevo Servicio</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.servicios.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del servicio']) !!}

                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción de servicio']) !!}

                    @error('descripcion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('duracion', 'Duracion') !!}
                    {!! Form::time('duracion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la hora del servicio']) !!}

                    @error('duracion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>

                </div>

                {!! Form::submit('Crear Servicio', ['class' => 'btn btn-primary']) !!}

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
