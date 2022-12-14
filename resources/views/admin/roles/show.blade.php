@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Mostrar rol</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            
            <p class="card-category">Vista detallada del rol "{{ $role->name }}"</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>                        
                          
                          <h5 class="title mt-3">Rol: {{ $role->name }}</h5>
                        
                        <p class="description">                          
                          {{ $role->guard_name }} <br>
                          {{ $role->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      @forelse ($role->permissions as $permission)
                          <span class="badge rounded-pill bg-dark text-white">{{ $permission->description }}</span>
                      @empty
                          <span class="badge badge-danger bg-danger">No tiene permisos asociados al rol</span>
                      @endforelse
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.roles.index')}}" >Volver</a>

                        <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-primary mr-3">
                            Editar </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
@stop

