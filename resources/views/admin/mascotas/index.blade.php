@extends('adminlte::page')

@section('title', 'Mascota')
@section ('css')
 <link rel="stylesheet" href="/css/admin_custom.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 @endsection

@section('content_header')
   
<a class="btn btn-success btn-sm float-left" href="{{route('admin.mascotas.create')}}">Nueva mascota</a>

@stop

@section('content')
     <h1>.</h1>
    {{-- <p>Mascotas</p> --}}
     <div class="row">
        <div class="col">
            <!-- <h3 class="text-center">Mascotas</h3> -->
            </div>
            </div>
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        
                        <div class="card">
                            <div class="card-head">
                                {{-- <h4 class="text-center">Información Mascota</h4> --}}
                            </div>
                         <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Nombre</label>
                             <input type="text" id="nombre" class="form-control" nombre="nombre">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Raza</label>
                            <input type="text" class="form-control" raza="raza">
                           </div>
                           
                           <div class="form-group col-6">
                            <label for="">Especie</label>
                            <input type="text" class="form-control" especie="especie">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Sexo</label>
                            <input type="text" class="form-control" sexo="sexo">
                           </div>

                         </div>
                         </div>

                         <table class="table">
                            <thead>
                              <tr>
                                <th>Mascota</th>
                                <th>Propietario</th>
                                <th>Opciones</th>

                              </tr>
                            </thead>
                            <tbody id="tblmascotas">
    
                            </tbody>
                        </table>

                    </div>
                <div class="col-sm-6">
                    
                    <div class="card">
                        <div class="card-head">
                            {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                    </div>

                         <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Color</label>
                             <input type="text" class="form-control" color="color">
                           </div>

                            <div class="form-group col-6">
                            <label for="">Peso</label>
                            <input type="text" class="form-control" peso="peso">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Edad</label>
                            <input type="text" class="form-control" edad="edad">
                            </div>

                            <div class="col-12">
                            <button onclick="agregar_mascota()" type="button" class=" btn btn-info float-right">Verificar</button>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </form>
@stop

@section("script")
<script>
      function agregar_mascota(){
        let mascota_id = $('#agregar_mascota').val();
        let mascota_text = $('#agregar_mascota').text();
        let nombre = $('#nombre').val();

          $("#tblmascotas").append(`
              <tr>
                
                <td>
                    <input type="hidden" name="mascota_id[]" value="${mascota_id}" />
                    <input type="hidden" name="nombre[]" value="${nombre}" />

                    ${mascota_text}}
                    
                </td>
                <td> ${nombre} </td>
                <td>
                    <button class="btn btn-danger btn-sm">X</button>
                </td>

                             
              </tr>
            `)


      }
</script>
@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
    <script> console.log('Hi!'); 
    
@stop
