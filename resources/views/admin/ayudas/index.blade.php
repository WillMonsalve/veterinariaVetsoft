@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<h1 style="text-align:center">AYUDAS</h1>
<hr>
<p>¿Necesitas ayuda? Ingresa a las opciones para tener una mejor asesoría.</p>
@stop

@section('content')
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">¿Olvidaste tu contraseña?</h5>
          <p class="card-text"></p>
          <a href="#"class="btn btn-success"><i class="bi bi-info-circle-fill"></i></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">¿Como registrarme? </h5>
          <p class="card-text"> </p>
          <a href="#" class="btn btn-success"><i class="bi bi-info-circle-fill"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">¿Como solicitar una cita? </h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-success"><i class="bi bi-info-circle-fill"></i></a>
        </div>
      </div>
    </div>
  </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">¿Nuestros datos de contacto?</h5>
          <p class="card-text"></p>
          <a href="https://es-la.facebook.com/acatdogtor/" class="btn btn-success"><i class="bi bi-info-circle-fill"></i></a>
        </div>
      </div>
    </div>
  </div>

@stop
