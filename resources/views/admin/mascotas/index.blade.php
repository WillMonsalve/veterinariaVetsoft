@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mascotas</h1>
@stop

@section('content')
    {{-- <p>Mascotas</p> --}}
     <div class="row">
        <div class="col">
            <!-- <h3 class="text-center">Mascotas</h3> -->
            </div>
            </div>
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="card">
                            <div class="card-head">
                                <h4 class="text-center">Información Mascota</h4>
                            </div>
                         <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Nombre</label>
                             <input type="text" class="form-control" name="nombre">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Raza</label>
                            <select name="" class="form-control">
                            </select>
                          </div>
                         </div>
                        </div>
                    </div>
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-head">
                            <h4 class="text-center">Detalle propietario</h4>
                        </div>
                        <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Nombre</label>
                             <select name="" class="form-control"></select>
                           </div>
                        </div>
                    </div>
                </div>
            </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop