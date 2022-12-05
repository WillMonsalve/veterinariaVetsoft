{{-- @extends('adminlte::page')

@section('title', 'Detalle Historia')
    
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
                                {{ __('Detalle Historia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-historias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Responsable</th>
										<th>Fecha</th>
										<th>Observaciones</th>
										<th>Historia Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleHistorias as $detalleHistoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleHistoria->Responsable }}</td>
											<td>{{ $detalleHistoria->Fecha }}</td>
											<td>{{ $detalleHistoria->Observaciones }}</td>
											<td>{{ $detalleHistoria->historia_id }}</td>

                                            <td>
                                                <form action="{{ route('detalle-historias.destroy',$detalleHistoria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-historias.show',$detalleHistoria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-historias.edit',$detalleHistoria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detalleHistorias->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}