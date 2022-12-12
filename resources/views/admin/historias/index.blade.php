@extends('adminlte::page')

@section('title', 'HISTORIAS CLINICAS')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
@endsection


    <a class="btn btn-success btn-sm float-right" href="{{ route('admin.historias.create') }}">AGREGAR <i
            class="bi bi-plus-circle-fill"></i></a>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<h1>HISTORIAS CLINICAS</h1>
@stop
@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
@endif

<div class="card">

    <div class="card-body">
        <table id="usuarios" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Mascota</th>
                      <th>Fecha</th>





                <div class="col-sm-6">

                  <div class="card">
                      <div class="card-head">
                          {{-- <h4 class="text-center">Detalle propietario</h4> --}}
                  </div>
{{-- implementar un select --}}

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
                      <label for="">Sistema músculo-esqueletico</label>
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



              <div class="col-12">
                <input type ='button' class="btn btn-info btn-sm"  value = 'Agregar Nota' onclick="location.href = '{{ route('admin.detalles.index')}}'">
              </div>

              {{-- <div class="col-12">
                <button type="submit" class="btn btn-success">Guardar</button>
              </div> --}}

              {{-- <div class="col-12">
                <input type ='button' class="btn btn-info btn-sm"  value = 'Volver' onclick="location.href = '{{ route('admin.historias.index')}}'"/>
                <input type ='button' class="btn btn-info btn-sm"  value = 'Guardar' onclick="location.href = '{{ route('admin.historias.index')}}'"/>
              </div> --}}


            </form>


@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate': {
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        }
    });
</script>
    <script> console.log('Hi!');  </script>

@stop
