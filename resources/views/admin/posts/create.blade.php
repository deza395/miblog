@extends('adminlte::page')

@section('title', 'Crear nuevo Post')

@section('content_header')
    <h1>Crear Nuevo Post</h1>
@stop


{{-- FORMULARIO PARA CREAR UN NUEVO POST --}}
@section('content')
<div class="card">
    <div class="card-body">
   {!!Form::open(['route'=>'admin.posts.store','autocomplete'=>'off','files'=>true])!!}


  
  @include('admin.posts.partials.form')
   {!!Form::submit('Crear Post' ,['class'=>'btn btn-primary'])!!}

   {!!Form::close([])!!}
    </div>
</div>
    
@stop
{{-- FIN DEL FORMULARIO PARA CREAR UN NUEVO POST --}}



@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
  .image-wrapper{
    position: relative;
    padding-bottom: 50.25%;
  }
  .image-wrapper img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
</style>
@stop


@section('js')
<script src={{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}>  </script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>


{{-- funcionalidades para escribir el extracto y el body --}}
<script >
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
//cambiar la imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>
@stop