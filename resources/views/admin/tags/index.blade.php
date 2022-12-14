@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')

    @can('admin.tags.create')
        <a class="btn btn-success float-right" href="{{route('admin.tags.create')}}">Nueva etiqueta</a>
    @endcan

    <h1>Lista de etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}"><i class="fas fa-pen-fancy"></i></a>
                                @endcan                                
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')                                   
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop