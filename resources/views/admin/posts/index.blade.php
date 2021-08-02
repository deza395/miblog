@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
<a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right"> Nuevo Post</a>
    <h1>Lista de Posts</h1>
@stop

{{-- LISTA DE SERVICIOS, CON BOTONES DE EDITAR  Y ELIMINAR  (componente livewire--}}

@section('content')
    @livewire('admin.posts-index')
@stop

{{--  FIN LISTA DE SERVICIOS, CON BOTONES DE EDITAR  Y ELIMINAR --}}




