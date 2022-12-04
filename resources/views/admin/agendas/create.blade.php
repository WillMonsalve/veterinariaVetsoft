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
                <select name="" id="" class="form-control">
                @foreach ($users as $user)
                    <option value="{{$user->user_id}}">{{$user->name}}</option>
                @endforeach
                </select>

                @error('user')
                <span class="text-danger">{{$message}}</span>
                @enderror

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
                            <small id="hora_intermedia_mañana" class="form-text text-muted">Hora intermedia mañana</small>  
                            <input type="time" class="form-control" name="hora_intermedia_mañana" id="hora_intermedia_mañana" aria-describedby="hora_intermedia_mañana" placeholder="">
                            </div>

                    @error('hora_intermedia_mañana')
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

            {!! Form::close() !!}
        </div>
    </div>

@stop

