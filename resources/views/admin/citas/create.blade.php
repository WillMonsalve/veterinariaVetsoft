@extends('adminlte::page')

@section('title', 'Citas')

@section('js')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('content_header')
    <h1>Registrar Nueva Cita</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.citas.store', 'method' => 'post']) !!}


                <div class="form-group">
                <label for="text">Cliente</label>
                <select class="form-control " name="cliente_id" id="">
                    @foreach($cliente as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_cliente}} </option>
                    @endforeach
                </select>

                @error('cliente')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>

                <div class="form-group">
                <label>Servicios</label>

                <select class="form-control" name="servicio_id" id="">
                    @foreach($servicios as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_servicio}} </option>
                    @endforeach
                    </select>
                @error('servicio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>

                <div class="form-group">
                    <label>Fecha</label>

                    <select class="form-control" name="agenda_id" id="">
                        @foreach($horarios as $key =>$value)
                             <option value="{{$value->id}}">{{$value->Fecha}} </option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label>Hora</label>

                    <select class="form-control" name="hora_id" id="">
                        @foreach($horarios as $key =>$value)
                             <option value="{{$value->id}}">{{$value->Hora_ini}} </option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Cancelada</option>
                    </select>
                </div>

                {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}

                <td>

                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.citas.index')}}" >Volver</a>

                </td>
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





