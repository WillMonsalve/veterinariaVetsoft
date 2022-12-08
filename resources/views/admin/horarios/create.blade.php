@extends('adminlte::page')

@section('title', 'crear')

@section('content_header')
    <h1>CREAR</h1>
@stop

@section('content')

<div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'admin.horarios.store', 'method' => 'post']) !!}
            <div class="form-group col-md-4">  
                    <label for="Estado">Estado</label>
                    <select class="form-control" name="Estado" id="Estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>

                </div>



                <div class="form-group col-md-4">
                        <label for="">Servicio</label>
                <select class="form-control" name="id_servi" id="">
                    @foreach($servicios as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_servicio}} </option>
                    @endforeach
                    </select>


                </div>




                             <div class="form-group col-md-4">
                             <label for="">Fecha</label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha" placeholder="">

                            </div>

                    @error('Fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror


                <div class="form-group col-md-4">
                {!! Form::label('Hora_ini', 'Duracion') !!}
                    {!! Form::time('Hora_ini', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la hora del servicio']) !!}
                            </div>



                         <div class="form-group col-md-4">
                            <small id="Hora_fin" class="form-text text-muted">Hora Final</small>
                            <input type="time" class="form-control" name="Hora_fin" id="Hora_fin" placeholder="">
                         </div>


               <div class="form-group col-md-4">
                  <label for="name">Responsable</label>
                   <select class="form-control" name="rol" id="" >
                    @foreach ($roles as $key =>$value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                 @endforeach
                    </select>
             </div>
         {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
</div>


{!! Form::close() !!}


@stop
