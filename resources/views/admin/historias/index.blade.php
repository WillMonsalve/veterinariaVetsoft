@extends('adminlte::page')

@section('title', 'Historia')
@section ('css')
 <link rel="stylesheet" href="/css/admin_custom.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <style>
  .select2-selection {
    height: calc(1.5em + .75rem + 2px) !important;
  }
 </style>
 @endsection

@section('content_header')
   
<a class="btn btn-success btn-sm float-right" type="submit" href="{{route('admin.historias.create')}}">Crear Historia</a>

<h1>Historia Clinica</h1>
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
                    <div class="col-sm-6">
                        
                        <div class="card">
                            <div class="card-head">
                                {{-- <h4 class="text-center">Información Mascota</h4> --}}
                            </div>
                         <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Mascota</label>
                             <select name="id" class="form-control">
                              <option value="">Seleccione</option>
                              @foreach($mascotas as $value)
                                  <option value="{{ $value->id }}">{{ $value->Nombre }}</option>
                              @endforeach
                             </select>
                           </div>

                           <div class="form-group col-6">
                            <label for="">Fecha</label>
                            <input type="date" class="form-control" fecha="Fecha">
                           </div>
                           
                           <div class="form-group col-6">
                            <label for="">Diagnostico</label>
                            <input type="text" class="form-control"diagnostico="Diagnostico">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Tratamiento</label>
                            <input type="text" class="form-control" trtamiento="Tratamiento">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Medicamentos</label>
                            <input type="text" class="form-control" medicamento="Medicamentos">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Motivo de consulta</label>
                            <input type="text" class="form-control" consulta="'Motivo de consulta">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Dieta</label>
                            <input type="text" class="form-control" dieta="Dieta">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Vacunación</label>
                            <input type="text" class="form-control" Vacunacion="Vacunacion">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Desparacitación</label>
                            <input type="text" class="form-control" Desparacitacion="Desparacitacion">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Estado Reproductivo</label>
                            <input type="text" class="form-control" Estado Reproductivo="Estado Reproductivo">
                           </div>
                         </div>
                         </div>

                        {{-- otra table --}}
                    </div>
                  <div class="col-sm-6">
                    
                    <div class="card">
                        <div class="card-head">
                            {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                    </div>

                         <div class="row card-body">

                           <div class="form-group col-6">
                             <label for="">Peso</label>
                             <input type="text" class="form-control" Peso="Peso">
                            </div>


                            <div class="form-group col-6">
                            <label for="">Mucosas</label>
                            <input type="text" class="form-control" Mucosas="Mucosas">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Turgencia</label>
                            <input type="text" class="form-control" Turgencia="Turgencia">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Pulso</label>
                            <input type="text" class="form-control" Pulso="Pulso">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Otros</label>
                            <input type="text" class="form-control" Otros="Otros">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Anamnesis</label>
                            <input type="text" class="form-control" Anamnesis="Anamnesis">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Enfermedades o procedimientos anteriores</label>
                            <input type="text" class="form-control" Enfermedades o procedimientos anteriores="Enfermedades o procedimientos anteriores">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Lista Problemas</label>
                            <input type="text" class="form-control" Lista Problemas="Lista Problemas">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Diagnosticos diferenciales</label>
                            <input type="text" class="form-control" Diagnosticos diferenciales="Diagnosticos diferenciales">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Plan diagnostico</label>
                            <input type="text" class="form-control" Plan diagnostico="Plan diagnostico">
                            </div>

                          </div>
                    </div>
                 </div>

                 

                 <div class="col-sm-6">
                    
                  <div class="card">
                      <div class="card-head">
                          {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                  </div>

                       <div class="row card-body">

                         <div class="form-group col-6">
                           <label for="">Diagnostico presuntivo</label>
                           <input type="text" class="form-control" Diagnostico presuntivo="Diagnostico presuntivo">
                         </div>

                          <div class="form-group col-6">
                          <label for="">Diagnostico definitivo</label>
                          <input type="text" class="form-control" Diagnostico definitivo="Diagnostico definitivo">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Pronostico</label>
                          <input type="text" class="form-control" Pronostico="Pronostico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Plan terapeutico</label>
                          <input type="text" class="form-control" Plan terapeutico="Plan terapeutico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" Observaciones="Observaciones">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Tratamiento al diagnostico</label>
                          <input type="text" class="form-control" Tratamiento al diagnostico="Tratamiento al diagnostico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Estado</label>
                          <input type="text" class="form-control" Estado="Estado">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Actitud</label>
                          <input type="text" class="form-control" Actitud="Actitud">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Hidratacion</label>
                          <input type="text" class="form-control" Hidratacion="Hidratacion">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Estado nutricional</label>
                          <input type="text" class="form-control" Estado nutricional="Estado nutricional">
                          </div>
                         
                      </div>
                  </div>
                </div>


                <div class="col-sm-6">
                    
                  <div class="card">
                      <div class="card-head">
                          {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                  </div>

                       <div class="row card-body">

                         <div class="form-group col-6">
                           <label for="">Modulos superficiales</label>
                           <input type="text" class="form-control" Modulos superficiales="Modulos superficiales">
                         </div>

                          <div class="form-group col-6">
                          <label for="">Sistema cardiovascular</label>
                          <input type="text" class="form-control" Sistema cardiovascular="Sistema cardiovascular">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema respiratorio</label>
                          <input type="text" class="form-control" Sistema respiratorio="Sistema respiratorio">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema digestivo</label>
                          <input type="text" class="form-control" Sistema digestivo="Sistema digestivo">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema reproductivo</label>
                          <input type="text" class="form-control" Sistema reproductivo="Sistema reproductivo">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema urinario</label>
                          <input type="text" class="form-control" Sistema urinario="Sistema urinario">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema nervioso</label>
                          <input type="text" class="form-control" Sistema nervioso="Sistema nervioso">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Sistema musculo-esqueletico</label>
                          <input type="text" class="form-control" Sistema musculo-esqueletico="Sistema musculo-esqueletico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Ojos</label>
                          <input type="text" class="form-control" Ojos="Ojos">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Piel y Anexos</label>
                          <input type="text" class="form-control" Piel y Anexos="Piel y Anexos">
                          </div>
                         
                      </div>
                  </div>
                </div>

                {{-- <table class="table">
                  <thead>
                    <tr>
                      <th>Número Historia</th>
                      <th>Propietario</th>
                     

                    </tr>
                  </thead>
                  <tbody id="tblhistorias">
                     @foreach ($historias as $historia)

                    <tr>
                            <td>{{$historia->id}}</td>
                            <td>{{$historia->Cliente->nombre_cliente}}</td>
                        
                    </tr>
                     @endforeach
                  </tbody>
              </table> --}}

              <div class="col-12">
                <input type ='button' class="btn btn-info btn-sm"  value = 'Agregar Nota' onclick="location.href = '{{ route('admin.detalles.index')}}'"/>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function(){
   $("select").select2();
  });
</script>
    <script> console.log('Hi!'); 
    
@stop
