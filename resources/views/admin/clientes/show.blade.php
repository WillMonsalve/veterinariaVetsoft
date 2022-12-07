@extends('adminlte::page')

@section('title', 'clientes')

@section('content_header')
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card">
         <div class="card-header card-header-primary">
          <div class="card-title"></div>
           <p class="card-category">Vista detallada del cliente {{ $cliente->name}} </p>
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
                   <img src="{{ asset('/img/person.jpg')}}" alt="image" class="avatar">
                    <h5 class="title mt-3">Datos</h5>
                  </a>
                  <p class="descripcion">
                   {{ $cliente->nombre_cliente}} <br>
                   {{ $cliente->apellido}} <br>
                   {{ $cliente->direccion}} <br>
                   {{ $cliente->cedula}} <br>
                   {{ $cliente->edad}} <br>
                   {{ $cliente->telefono}} <br>
                   {{ $cliente->email}} <br>


                  </p>
            </div>
           </p>
           <div class="card-descripcion">
            {{-- {{lorem ipsum dolor sit amet, consectetur adipisicing elit}} --}}
          </div>
         </div>
         <div class="card-footer">
          <div class="button-container">
            <a href="{{ route('admin.clientes.index')}}" class="btn btn-sm btn-success mr-3"> Volver </a>
            <a href="{{ route('admin.clientes.edit', $cliente)}}" class="btn btn-sm btn-primary mr-3"> Editar </a>
           </div>
         </div>
        </div>
     </div>
    </div>
@stop

{{-- @section('content')
    @livewire('admin.clientes.index')
@stop --}}

