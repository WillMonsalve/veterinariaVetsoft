@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Registrar Nueva Cita</h1>

    @can('admin.citas.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.citas.create')}}">Agregar Cita</a>
@endcan
@stop


@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.citas.store']) !!}

            <div class="form-group">
                <label for="name">Estado Cita</label>
                <select class="form-control" name="estado" id="estado" >
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>

            </div>

            <div class="form-group">
                <label for="name">Servicios</label>
                <select name="" id="" class="form-control">
                @foreach ($servicios as $servicio)
                    <option value="{{$servicio->servicio_id}}">{{$servicio->nombre}}</option>
                @endforeach
                </select>

                @error('servicio')
                <span class="text-danger">{{$message}}</span>
                @enderror

               </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control datepicker" placeholder="Seleccionar Fecha" type="text" value="{{date('Y-m-d')}}"
                        data-date-format="yyyy-mm-dd" data-date-start-date="{{date ('Y-m-d')}}" data-date-end-date="+30d">
                        </div>


                    @error('fecha')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('hora', 'Hora') !!}
                    {!! Form::time('hora', null, ['class' => 'form-control', 'placeholder' => 'Hora']) !!}

                    @error('hora')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="name">Cliente</label>
                    <select name="" id="" class="form-control">
                    @foreach ($cliente as $clientes)
                        <option value="{{$clientes->cliente_id}}">{{$clientes->nombre}}</option>
                    @endforeach
                    </select>

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
    <script src="{{asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

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

