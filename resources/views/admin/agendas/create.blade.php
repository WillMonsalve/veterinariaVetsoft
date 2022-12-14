@extends('adminlte::page')

@section('title', 'Horario')

@section('content_header')
    <h1>Crear Nuevo horario</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.agendas.store']) !!}

            <div class="form-group">
                <label for="name">Usuarios</label>
                <select class="form-control" name="user_id" id="" >
                @foreach ($roles as $key =>$value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
                </select>

              

               </div>

            <div class="row">
                            <div class="form-group col-md-6">
                            <small id="fecha_inicio" class="form-text text-muted-success">Fecha Inicio</small>
                            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="fecha_inicio" placeholder="">

                            </div>

                    @error('fecha_inicio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="row">
                            <div class="form-group col-md-6">
                            <small id="fecha_final" class="form-text text-muted">Fecha Final</small>
                            <input type="date" class="form-control" name="fecha_final" id="fecha_final" aria-describedby="fecha_final" placeholder="">

                            </div>

                    @error('fecha_final')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>



                <div class="row">
                            <div class="form-group col-md-6">
                            <small id="hora_inicio" class="form-text text-muted">Hora inicio</small>
                            <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" aria-describedby="hora_inicio" placeholder="">
                            </div>

                    @error('hora_inicio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="row">
                            <div class="form-group col-md-6">
                            <small id="hora_intermedia_ma??ana" class="form-text text-muted">Hora intermedia ma??ana</small>
                            <input type="time" class="form-control" name="hora_intermedia_ma??ana" id="hora_intermedia_ma??ana" aria-describedby="hora_intermedia_ma??ana" placeholder="">
                            </div>

                    @error('hora_intermedia_ma??ana')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="row">
                            <div class="form-group col-md-6">
                            <small id="hora_intermedia_tarde" class="form-text text-muted">Hora intermedia tarde</small>
                            <input type="time" class="form-control" name="hora_intermedia_tarde" id="hora_intermedia_tarde" aria-describedby="hora_intermedia_tarde" placeholder="">
                            </div>

                    @error('hora_intermedia_tarde')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="row">
                            <div class="form-group col-md-6">
                            <small id="hora_final" class="form-text text-muted">Hora final</small>
                            <input type="time" class="form-control" name="hora_final" id="hora_final" aria-describedby="hora_final" placeholder="">
                            </div>

                    @error('hora_final')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>



                {!! Form::submit('Crear horario', ['class' => 'btn btn-dark']) !!}
                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.agendas.index')}}" >Volver</a>

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

