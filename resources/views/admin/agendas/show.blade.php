@extends('adminlte::page')

@section('title', 'agendas')

@section('content_header')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary">
          <div class="card-title"></div>
           <p class="card-category">Detalle Agenda {{ $agenda->name}} </p>
           </div>
           {{-- body --}}
           <div class="card-body">
            <div class="row">
             <div class="col-md-4">
              <div class="card card-cliente">
               <div class="card-body">
                <p class="card-text">
                 <div class="author">
                
                        
                    <a href="#">
                        
                         <h5 class="title mt-3">Datos</h5>
                       </a>
                    <p class="descripcion">
                    <h6>Usuario</h6>{{$agenda->user_id}} <br>   
                    <h6>Fecha inicio</h6>{{$agenda->fecha_inicio}} <br>
                    <h6>Fecha final</h6>{{$agenda->fecha_final}} <br>
                    <h6>Hora inicio</h6>{{$agenda->hora_inicio}} <br>
                    <h6>hora intermedia mañana</h6>{{$agenda->hora_intermedia_mañana}} <br><br>
                    <h6>hora intermedia tarde</h6>{{$agenda->hora_intermedia_tarde}} <br><br>
                    <h6>Hora final</h6>{{$agenda->hora_final}} <br><br>
            </div>
           </p>
           <div class="card-descripcion">
            {{-- {{lorem ipsum dolor sit amet, consectetur adipisicing elit}} --}}
          </div>
         </div>
         <div class="card-footer">
          <div class="button-container">
            <a href="{{ route('admin.agendas.index')}}" class="btn btn-sm btn-danger mr-3"> Regresar </a>
           </div>
         </div>
        </div>
     </div>
    </div>
@stop