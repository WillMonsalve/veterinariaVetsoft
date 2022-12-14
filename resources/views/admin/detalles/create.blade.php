@extends('adminlte::page')
@section('title', 'Detalles')
@section('content_header')
    <h1>Detalles</h1>
@stop
@section('content')
<div class="row">
<div class="col-md-12">
    {!! Form::open(['route' => 'admin.detalles.store', 'method' => 'post']) !!}
    @csrf
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nombre">Responsable</label>
                <input type="text" name="nombre" id="Responsable" class="form-control" placeholder="Responsable" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="descripcion">Fecha</label>
                <input type="date" name="Fecha" id="descripcion" class="form-control" placeholder="Fecha" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help {!! Form::date($name, $value, [$options]) !!}</small>
            </div>
            
            <div class="form-group">
                <label for="Observaciones">Fecha</label>
                <input type="text" name="Observaciones" id="descripcion" class="form-control" placeholder="Observaciones" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="text">Número Historia</label>
                <select class="form-control" name="historia_id" id="historia_id">
                    @foreach ($historias as $historia)
                        <option value="{{ $historia->id }}">{{ $historia->numero }}</option>
                    @endforeach
                    </select>
            </div>
                    {!! Form::select('historia_id', $historias, null, ['class' => 'form-control']) !!}
                    <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.historias.index')}}">Volver</a>

            </div>
          </div>
        </div>
      </div>
    </div>
   {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
@stop
