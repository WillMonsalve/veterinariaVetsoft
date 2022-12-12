@extends('adminlte::page')

@section('title', 'Mascota')

@section('content_header')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary">
          <div class="card-title"></div>
           <p class="card-category">Vista detallada de la mascota {{ $mascota->Nombre}} </p>  
           </div>
           {{-- body --}}
           <div class="card-body">
            <div class="row">
             <div class="col-md-4">
              <div class="card card-mascota">
               <div class="card-body">
                <p class="card-text">
                 <div class="author">
                  <a href="#">
                   <img src="{{ asset('/img/mascot.jpg')}}" alt="image" class="avatar">
                    <h5 class="title mt-3">Datos</h5> 
                  </a>   
                  <p class="descripcion">
                  <h6>Nombre</h6>{{ $mascota->Nombre}} <br>
                  {{ $mascota->Raza}} <br>
                  {{ $mascota->Color}} <br> 
                  {{ $mascota->Peso}} <br>
                  {{ $mascota->Especie}} <br> 
                  {{ $mascota->Edad}} <br>  
                  {{ $mascota->Sexo}} <br> 
                   
                
                  </p>           
            </div>   
           </p>
           <div class="card-descripcion">
            {{-- {{lorem ipsum dolor sit amet, consectetur adipisicing elit}} --}}
          </div>     
         </div>
         <div class="card-footer">
          <div class="button-container">
          <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.mascotas.index')}}" >Volver</a>
            <a href="{{ route('admin.mascotas.edit', $mascota)}}" class="btn btn-sm btn-primary mr-3"> Editar </a>
           </div>
         </div>  
        </div>
     </div>
    </div>
@stop

{{-- @section('content')
    @livewire('admin.clientes.index')
@stop --}}