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


                <div class="form-group col-md-6">
                    <label for="text">Mascota</label>
                    <select class="form-control " name="mascota_id" id="">
                        @foreach($mascotas as $key =>$value)
                             <option value="{{$value->id}}">{{$value->Nombre}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha"
                        placeholder="Fecha"required>
                </div>
                   

                <div class="form-group col-6">
                    <label for="">Motivo de consulta</label>
                    <input type="text" class="form-control" name="Motivodeconsulta" placeholder="Motivo de consulta"required>
                </div>


                <div class="form-group col-4">
                    <label for="">Dieta</label>
                    <input type="text" class="form-control" name="Dieta" placeholder="Dieta"required>
                </div>
                <div class="form-group col-6">
                    <label for="">Medicamentos</label>
                    <input type="text" class="form-control" name="Medicamentos" placeholder="Medicamentos"required>
                </div>
                <div class="form-group col-6">
                    <label for="">Enfermedades o procedimientos anteriores</label>s
                    <input type="text" class="form-control" name="Enfermedadesoprocedimientosanteriores" placeholder="Enfermedades o procedimientos anteriores"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Mucosas</label>
                    <input type="text" class="form-control" name="Mucosas" placeholder="Mucosas"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Vacunaci??n</label>
                    <select class="form-control" name="Vacunacion" id="Vacunacion">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="">Desparacitaci??n</label>
                    <select class="form-control" name="Desparacitacion" id="Desparacitacion">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="">Estado Reproductivo</label>
                    <select class="form-control" name="EstadoReproductivo" id="EstadoReproductivo">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="">Turgencia</label>
                    <input type="text" class="form-control" name="Turgencia" placeholder="Turgencia"required>
                </div>
                <div class="form-group col-6">
                    <label for="">Pulso</label>
                    <input type="text" class="form-control" name="Pulso" placeholder="Pulso"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Anamnesis</label>
                    <input type="text" class="form-control" name="Anamnesis" placeholder="Anamnesis"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Lista Problemas</label>
                    <input type="text" class="form-control" name="ListaProblemas" placeholder="Lista Problemas"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Tratamiento al diagn??stico</label>
                    <input type="text" class="form-control" name="Tratamientoaldiagnostico" placeholder="Tratamiento al diagn??stico"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Diagn??sticos diferenciales</label>
                    <input type="text" class="form-control" name="Diagnosticosdiferenciales" placeholder="Diagn??sticos diferenciales"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Diagn??stico presuntivo</label>
                    <input type="text" class="form-control" name="Diagnosticopresuntivo" placeholder="Diagn??stico presuntivo"required>
                </div>
                <div class="form-group col-6">
                    <label for="">Plan diagn??stico</label>
                    <input type="text" class="form-control" name="Plandiagnostico" placeholder="Plan diagn??stico"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Tratamiento</label>
                    <input type="text" class="form-control" name="Tratamiento" placeholder="Tratamiento"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Otros</label>
                    <input type="text" class="form-control" name="Otros" placeholder="Otros"required>
                </div>
                <div class="form-group col-6">
                    <label for="">Diagn??stico definitivo</label>
                    <input type="text" class="form-control" name="Diagnosticodefinitivo" placeholder="Diagn??stico definitivo"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Pron??stico</label>
                    <input type="text" class="form-control" name="Pronostico" placeholder="Pron??stico"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Plan terapeutico</label>
                    <input type="text" class="form-control" name="Planterapeutico" placeholder="Plan terapeutico"required>
                </div>

                <div class="form-group col-6">
                    <label for="">Observaciones</label>
                    <input type="text" class="form-control" name="Observaciones" placeholder="Observaciones"required>
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
                    <label for="">Hidrataci??n</label>
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
                    <label for="">Sistema m??sculo-esquel??tico</label>
                    <select class="form-control" name="Sistemamusculo-esqueletico" id="Sistemamusculo-esqueletico">
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
                    <label for="">Diagn??stico</label>
                    <input type="text" class="form-control" name="Diagnostico" placeholder="Diagn??stico"required>
                </div>
                

                {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}

                <input type ='button' class="btn btn-info btn-sm"  value = 'Agregar Nota' onclick="location.href = '{{ route('admin.detalles.index')}}'">

            </div>

        </div>
    </div>

    {!! Form::close() !!}


@stop
