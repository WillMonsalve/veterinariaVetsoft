@extends('adminlte::page')

@section('title', 'HISTORIA CLINICA')

@section('content_header')
    <h1 class="text-center">HISTORIA CLINICA</h1>
@stop

@section('content')
<div class="card">
       <div class="card-body">
        {!! Form::open(['route' => 'admin.historias.store', 'method' => 'post']) !!}
             <div class="row card-body">
                           <div class="form-group col-6">
                             <label for="">Mascota</label>
                             <select name="mascota_id" class="form-control">
                              <option value="">Seleccione</option>
                              @foreach($mascotas as $value)
                                  <option value="{{ $value->id }}">{{ $value->Nombre }}</option>
                              @endforeach
                             </select>
                           </div>

                       <div class="form-group col-md-4">
                        <label for="">Fecha</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha" placeholder="">


                         @error('Fecha')
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                           </div>

                           <div class="form-group col-6">
                            <label for="">Motivo de consulta</label>
                            <input type="text" class="form-control" name="Motivodeconsulta">
                           </div>


                           <div class="form-group col-4">
                            <label for="">Dieta</label>
                            <input type="text" class="form-control" name="Dieta">
                           </div>
                           <div class="form-group col-6">
                            <label for="">Medicamentos</label>
                            <input type="text" class="form-control" name="Medicamentos">
                           </div>
                           <div class="form-group col-6">
                            <label for="">Enfermedades o procedimientos anteriores</label>
                            <input type="text" class="form-control" name="Enfermedadesoprocedimientosanteriores">
                            </div>
                            
                            <div class="form-group col-6">
                              <label for="">Mucosas</label>
                              <input type="text" class="form-control" name="Mucosas">
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
                                <select class="form-control" name="Estado Reproductivo" id="EstadoReproductivo">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                              </div>
                           
                              <div class="form-group col-6">
                            <label for="">Turgencia</label>
                            <input type="text" class="form-control" name="Turgencia">
                            </div>
                            <div class="form-group col-6">
                            <label for="">Pulso</label>
                            <input type="text" class="form-control" name="Pulso">
                            </div>
                           
                            <div class="form-group col-6">
                            <label for="">Anamnesis</label>
                            <input type="text" class="form-control" name="Anamnesis">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Lista Problemas</label>
                              <input type="text" class="form-control"  name="ListaProblemas">
                              </div>
                            
                             <div class="form-group col-6">
                              <label for="">Tratamiento al diagnóstico</label>
                              <input type="text" class="form-control" name ="Tratamientoaldiagnostico">
                              </div>
                           
                            <div class="form-group col-6">
                            <label for="">Diagnósticos diferenciales</label>
                            <input type="text" class="form-control"  name="Diagnosticosdiferenciales">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Diagnóstico presuntivo</label>
                              <input type="text" class="form-control"  name="Diagnosticopresuntivo">
                            </div>
                            <div class="form-group col-6">
                            <label for="">Plan diagnóstico</label>
                            <input type="text" class="form-control" name="Plandiagnostico">
                            </div>

                            <div class="form-group col-6">
                              <label for="">Tratamiento</label>
                              <input type="text" class="form-control" name="Tratamiento">
                             </div>

                            <div class="form-group col-6">
                              <label for="">Otros</label>
                              <input type="text" class="form-control" name="Otros">
                              </div>
                              <div class="form-group col-6">
                          <label for="">Diagnóstico definitivo</label>
                          <input type="text" class="form-control"  name="Diagnosticodefinitivo">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Pronóstico</label>
                          <input type="text" class="form-control" name="Pronostico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Plan terapeutico</label>
                          <input type="text" class="form-control" name="Planterapeutico">
                          </div>

                          <div class="form-group col-6">
                          <label for="">Observaciones</label>
                          <input type="text" class="form-control" name="Observaciones">
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
                        <select class="form-control" name="Estadonutricional" id="Estadonutricional">
                            <option value="Normal">Normal</option>
                            <option value="Anormal">Anormal</option>
                            <option value="No evaluado">No evaluado</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Modulos superficiales</label>
                      <select class="form-control" name="Modulossuperficiales" id="Modulossuperficiales">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                  </div>    
                  <div class="form-group col-6">
                      <label for="">Sistema cardiovascular</label>
                      <select class="form-control" name="Sistemacardiovascular" id="Sistemacardiovascular">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema respiratorio</label>
                      <select class="form-control" name="Sistemarespiratorio" id="Sistemarespiratorio">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema digestivo</label>
                      <select class="form-control" name="Sistemadigestivo" id="Sistemadigestivo">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>
                          

                    <div class="form-group col-6">
                      <label for="">Sistema reproductivo</label>
                      <select class="form-control" name="Sistemareproductivo" id="Sistemareproductivo">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema urinario</label>
                      <select class="form-control" name="Sistemaurinario" id="Sistemaurinario">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema nervioso</label>
                      <select class="form-control" name="Sistemanervioso" id="Sistemanervioso">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                      <label for="">Sistema músculo-esquelético</label>
                      <select class="form-control" name="Sistemamúsculo-esqueletico" id="Sistemamúsculo-esqueletico">
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
                      <select class="form-control" name="PielyAnexos" id="PielyAnexos">
                          <option value="Normal">Normal</option>
                          <option value="Anormal">Anormal</option>
                          <option value="No evaluado">No evaluado</option>
                      </select>
                    </div>

                    <div class="form-group col-6">
                          <label for="">Diagnostico</label>
                          <input type="text" class="form-control" name="Diagnostico">
                          </div>
                                      

                              {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
             </div>
       
        </div>
  </div>

{!! Form::close() !!}


@stop
