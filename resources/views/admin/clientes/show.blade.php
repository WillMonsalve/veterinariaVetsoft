@extends('adminlte::page')

@section('title', 'usuarios')

@section('content_header')
    <h1>Mostrar Cliente</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop