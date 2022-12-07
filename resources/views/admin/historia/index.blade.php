{{-- @extends('adminlte::page')

@section('title', 'Historia')
    
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Diagnostico</th>
										<th>Tratamiento</th>
										<th>Medicamentos</th>
										<th>Motivo De Consulta</th>
										<th>Dieta</th>
										<th>Vacunacion</th>
										<th>Desparacitacion</th>
										<th>Estado Reproductivo</th>
										<th>Peso</th>
										<th>Mucosas</th>
										<th>Turgencia</th>
										<th>Pulso</th>
										<th>Otros</th>
										<th>Anamnesis</th>
										<th>Enfermedades O Procedimientos Anteriores</th>
										<th>Lista Problemas</th>
										<th>Diagnosticos Diferenciales</th>
										<th>Plan Diagnostico</th>
										<th>Diagnostico Presuntivo</th>
										<th>Diagnostico Definitivo</th>
										<th>Pronostico</th>
										<th>Plan Terapeutico</th>
										<th>Observaciones</th>
										<th>Tratamiento Al Diagnostico</th>
										<th>Estado</th>
										<th>Actitud</th>
										<th>Hidratacion</th>
										<th>Estado Nutricional</th>
										<th>Modulos Superficiales</th>
										<th>Sistema Cardiovascular</th>
										<th>Sistema Respiratorio</th>
										<th>Sistema Digestivo</th>
										<th>Sistema Reproductivo</th>
										<th>Sistema Urinario</th>
										<th>Sistema Nervioso</th>
										<th>Sistema Musculo-Esqueletico</th>
										<th>Ojos</th>
										<th>Piel Y Anexos</th>
										<th>Mascota Id</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historias as $historia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historia->Fecha }}</td>
											<td>{{ $historia->Diagnostico }}</td>
											<td>{{ $historia->Tratamiento }}</td>
											<td>{{ $historia->Medicamentos }}</td>
											<td>{{ $historia->Motivo de consulta }}</td>
											<td>{{ $historia->Dieta }}</td>
											<td>{{ $historia->Vacunacion }}</td>
											<td>{{ $historia->Desparacitacion }}</td>
											<td>{{ $historia->Estado Reproductivo }}</td>
											<td>{{ $historia->Peso }}</td>
											<td>{{ $historia->Mucosas }}</td>
											<td>{{ $historia->Turgencia }}</td>
											<td>{{ $historia->Pulso }}</td>
											<td>{{ $historia->Otros }}</td>
											<td>{{ $historia->Anamnesis }}</td>
											<td>{{ $historia->Enfermedades o procedimientos anteriores }}</td>
											<td>{{ $historia->Lista Problemas }}</td>
											<td>{{ $historia->Diagnosticos diferenciales }}</td>
											<td>{{ $historia->Plan diagnostico }}</td>
											<td>{{ $historia->Diagnostico presuntivo }}</td>
											<td>{{ $historia->Diagnostico definitivo }}</td>
											<td>{{ $historia->Pronostico }}</td>
											<td>{{ $historia->Plan terapeutico }}</td>
											<td>{{ $historia->Observaciones }}</td>
											<td>{{ $historia->Tratamiento al diagnostico }}</td>
											<td>{{ $historia->Estado }}</td>
											<td>{{ $historia->Actitud }}</td>
											<td>{{ $historia->Hidratacion }}</td>
											<td>{{ $historia->Estado nutricional }}</td>
											<td>{{ $historia->Modulos superficiales }}</td>
											<td>{{ $historia->Sistema cardiovascular }}</td>
											<td>{{ $historia->Sistema respiratorio }}</td>
											<td>{{ $historia->Sistema digestivo }}</td>
											<td>{{ $historia->Sistema reproductivo }}</td>
											<td>{{ $historia->Sistema urinario }}</td>
											<td>{{ $historia->Sistema nervioso }}</td>
											<td>{{ $historia->Sistema musculo-esqueletico }}</td>
											<td>{{ $historia->Ojos }}</td>
											<td>{{ $historia->Piel y Anexos }}</td>
											<td>{{ $historia->mascota_id }}</td>
											<td>{{ $historia->user_id }}</td>

                                            <td>
                                                <form action="{{ route('admin.historia.destroy',$historia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historia.show',$historia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historia.edit',$historia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historias->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}