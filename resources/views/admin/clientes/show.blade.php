@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary">
          <div class="card-title">Clientes</div>
           <p class="card-categoy">Vista detallada de clientes...</p>  
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
                   <img src="{{ asset('/img/avatarDefault.jpg')}}" alt="image" class="avatar">
                    <h5 class="title mt-3">Nombre</h5> 
                  </a>   
                  <p class="descripcion">
                   {{-- {{}} --}} <br>
                   {{-- {{}} --}} <br>
                   {{-- {{}} --}} <br>
                
                  </p>           
            </div>   
           </p>
           <div class="card-descripcion">
            {{-- {{lorem ipsum dolor sit amet, consectetur adipisicing elit}} --}}
          </div>     
         </div>
         <div class="card-footer">
          <div class="button-container">
           <button class="btn btn-sm btn-primary">Editar</button> 
          </div>
         </div>  
        </div>
     </div>
    </div>
@stop

{{-- @section('content')
    @livewire('admin.clientes.index')
@stop --}}