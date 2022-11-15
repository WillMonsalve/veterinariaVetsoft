@extends('adminlte::page')
@section('content_header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <h1>Lista de horarios</h1>
    <div class="row card-body">
                    <div class="col-6">
                        <div class="form-group ">
                            <label for="">rol</label>
                            <select name="caracteristicas" id="caracteristicas" class="form-control">
                            <option value="">SELECCIONE</option>
                            <option value="">VETERINARIO</option>
                                <option value="">ASISTENTE</option>
                            </select>
                        </div>
                    </div>
                 
@stop

@section('content')


    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

<form action="">
    <div class="card">
    <!-- {!! Form::open(['route' => 'admin.agendas.store']) !!} -->
    <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Dia</th>
                        <th>Disponibilidad</th>
                        <th>Turno mañana</th>
                        <th>Turno tarde</th>




                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($days as $day)

                    <th>{{$day}}</th>
                    <td>
                    <div class="form-group">

                            <select class="form-control" name="estado" id="estado" >
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>

                        </div>
                    </td>
                    <td>
                    <div class= "row">
                        <div class="col">
                            <select class="form-control" name="morning_start[]">
                                @for ($i=8; $i<=11; $i++)
                                <option value="{{$i+12}}:00">{{$i}}:00 AM</option>
                                <option value="{{$i+12}}:30">{{$i}}:30 AM</option>

                                @endfor
                            </select>
                        </div>
                             <div class="col">
                            <select class="form-control" name="morning_end[]">
                                @for ($i=8; $i<=11; $i++)
                                <option value="{{$i+12}}:00">{{$i}}:00 AM</option>
                                <option value="{{$i+12}}:30">{{$i}}:30 AM</option>

                                @endfor
                            </select>
                        </div>

                    </div>
                    </td>
                    <td>
                    <div class= "row">
                        <div class="col">
                            <select class="form-control" name="afternoon_start[]">
                                @for ($i=2; $i<=11; $i++)
                                <option value="{{$i+12}}:00">{{$i}}:00 PM</option>
                                <option value="{{$i+12}}:30">{{$i}}:30 PM</option>

                                @endfor
                            </select>
                        </div>
                             <div class="col">
                            <select class="form-control" name="afternoon_end[]">
                                @for ($i=2; $i<=11; $i++)
                                <option value="{{$i+12}}:00">{{$i}}:00 PM</option>
                                <option value="{{$i+12}}:30">{{$i}}:30 PM</option>

                                @endfor
                            </select>
                        </div>

                    </div>
                    </td>
                  </tr>


                  @endforeach
                </tbody>
            </table>






        </div>
    </div>
    <!-- {!! Form::submit('AGENDAR', ['class' => "btn btn-outline-success"]) !!}
     {!! Form::close() !!} -->
     </form>

@stop

