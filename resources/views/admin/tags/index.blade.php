@extends('adminlte::page')

@section('title', 'blog')

@section('content_header')
    <h1>Data free</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.tags.create')}}" class="btn btn-secondary">agregar Etiqueta
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th> id </th>
                    <th>nombre</th>
                    <th colspan='2'></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td  width='10px'>
                            <a href="{{route('admin.tags.edit',$tag)}}" class="btn btn-primary btn-sm">Editar </a>
                        </td>
                        <td width='10px'>
                            <form action="{{route('admin.tags.destroy',$tag)}}" method='POST'>
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type='submit'>Eliminar</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

