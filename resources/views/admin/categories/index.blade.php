@extends('adminlte::page')

@section('title', 'Vetsoft')
 
 @section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-success float-right" href="{{route('admin.categories.create')}}">Agregar categoría</a>
    @endcan
    
    <h1>Lista de categorías</h1>
 @stop
 
 @section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

     <div class="card">
        <div class="card-body">
            <table id="users" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}"><i class="fas fa-pen-fancy"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                    </form>
                                @endcan                                
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
     </div>
 @stop




 
 