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
{{-- guardar la informacion de la historia clinica de la mascota--}}
    <a class ="btn btn-success btn-sm float-right" type="submit" href="{{route('admin.historias.index')}}">Crear Historia</a>


    <div class="col-12">
    <input type ='button' class="btn btn-info btn-sm"  value = 'Agregar Nota' onclick="location.href = '{{ route('admin.detalles.index')}}'">
    </div>

<h1 class="text-center">Historia Clinica</h1>
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
                            <label for="">Motivo de consulta</label>
                            <input type="text" class="form-control" consulta="Motivo de consulta">
                           </div>
                           
                           <div class="form-group col-6">
                            <label for="">Dieta</label>
                            <input type="text" class="form-control" dieta="Dieta">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Medicamentos</label>
                            <input type="text" class="form-control" medicamento="Medicamentos">
                           </div>

                           <div class="form-group col-6">
                            <label for="">Enfermedades o procedimientos anteriores</label>
                            <input type="text" class="form-control" Enfermedades o procedimientos anteriores="Enfermedades o procedimientos anteriores">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Mucosas</label>
                              <input type="text" class="form-control" Mucosas="Mucosas">
                              </div>

                              <div class="form-group col-6">
                                <label for="">Vacunación</label>
                                <select class="form-control" name="Vacunacion" id="Vacunacion">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                              </div>

                              <div class="form-group col-6">
                                <label for="">Desparacitación</label>
                                <select class="form-control" name="Desparacitación" id="Desparacitación">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                              </div>

                              <div class="form-group col-6">
                                <label for="">Estado Reproductivo</label>
                                <select class="form-control" name="Estado Reproductivo" id="Estado Reproductivo">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
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
                            <label for="">Turgencia</label>
                            <input type="text" class="form-control" Turgencia="Turgencia">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Pulso</label>
                            <input type="text" class="form-control" Pulso="Pulso">
                            </div>
                           
                            <div class="form-group col-6">
                            <label for="">Anamnesis</label>
                            <input type="text" class="form-control" Anamnesis="Anamnesis">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Lista Problemas</label>
                              <input type="text" class="form-control" Lista Problemas="Lista Problemas">
                              </div>
                            
                             <div class="form-group col-6">
                              <label for="">Tratamiento al diagnóstico</label>
                              <input type="text" class="form-control" Tratamiento al diagnostico="Tratamiento al diagnostico">
                              </div>
                           
                            <div class="form-group col-6">
                            <label for="">Diagnósticos diferenciales</label>
                            <input type="text" class="form-control" Diagnosticos diferenciales="Diagnosticos diferenciales">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Diagnóstico presuntivo</label>
                              <input type="text" class="form-control" Diagnostico presuntivo="Diagnostico presuntivo">
                            </div>

                            <div class="form-group col-6">
                            <label for="">Plan diagnóstico</label>
                            <input type="text" class="form-control" Plan diagnostico="Plan diagnostico">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Tratamiento</label>
                              <input type="text" class="form-control" trtamiento="Tratamiento">
                             </div>

                            <div class="form-group col-6">
                              <label for="">Otros</label>
                              <input type="text" class="form-control" Otros="Otros">
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
                          <label for="">Diagnóstico definitivo</label>
                          <input type="text" class="form-control" Diagnostico definitivo="Diagnostico definitivo">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Pronóstico</label>
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
                            <label for="">Actitud</label>
                            <select class="form-control" name="Actitud" id="Actitud">
                                <option value="Normal">Normal</option>
                                <option value="Anormal">Anormal</option>
                                <option value="No evaluado">No evaluado</option>
                            </select>
                        </div>

                        <div class="form-group col-6">
                          <label for="">Hidratación</label>
                          <select class="form-control" name="Hidratacion" id="Hidratacion">
                              <option value="Normal">Normal</option>
                              <option value="Anormal">Anormal</option>
                              <option value="No evaluado">No evaluado</option>
                          </select>
                      </div>

                      <div class="form-group col-6">
                        <label for="">Estado nutricional</label>
                        <select class="form-control" name="Estado nutricional" id="Estado nutricional">
                            <option value="Normal">Normal</option>
                            <option value="Anormal">Anormal</option>
                            <option value="No evaluado">No evaluado</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Modulos superficiales</label>
                      <select class="form-control" name="Modulos superficiales" id="Modulos superficiales">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                  </div>    

                                           
                         
                      </div>
                  </div>
                </div>


                <div class="col-sm-6">
                    
                  <div class="card">
                      <div class="card-head">
                          {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                  </div>
{{-- implementar un select --}}
                        <div class="row card-body">

                    <div class="form-group col-6">
                      <label for="">Sistema cardiovascular</label>
                      <select class="form-control" name="Sistema cardiovascular" id="Sistema cardiovascular">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema respiratorio</label>
                      <select class="form-control" name="Sistema respiratorio" id="Sistema respiratorio">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema digestivo</label>
                      <select class="form-control" name="Sistema digestivo" id="Sistema digestivo">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>
                          

                    <div class="form-group col-6">
                      <label for="">Sistema reproductivo</label>
                      <select class="form-control" name="Sistema reproductivo" id="Sistema reproductivo">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema urinario</label>
                      <select class="form-control" name="Sistema urinario" id="Sistema urinario">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema nervioso</label>
                      <select class="form-control" name="Sistema nervioso" id="Sistema nervioso">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema músculo-esquelético</label>
                      <select class="form-control" name="Sistema músculo-esqueletico" id="Sistema músculo-esqueletico">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Ojos</label>
                      <select class="form-control" name="Ojos" id="Ojos">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Piel y Anexos</label>
                      <select class="form-control" name="Piel y Anexos" id="Piel y Anexos">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>
                       
                         
                      </div>
                  </div>
                </div>
                            
            </form>

            
@stop


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
    <script> console.log('Hi!');  </script>
    
@stop
