{{-- @extends('adminlte::page')

@section('title', 'Actualizar Detalle Historia')
   
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Detalle Historia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalle-historia.update', $detalleHistoria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalle-historia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}
