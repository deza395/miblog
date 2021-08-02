@extends('adminlte::page')

@section('title', 'blog')

@section('content_header')
    <h1>Crear etiqueta</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::open(['route'=>'admin.tags.store'])!!}
        <div class="form-group">
            {!!Form::label('name','Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>"ingrese el nombre de la etiqueta"])!!}
        </div>
        @error('name')
            <span class="text-danger">{{$message}}</span>      
        @enderror

        <div class="form-group">
            {!!Form::label('slug','Slug')!!}
            {!!Form::text('slug',null,['class'=>'form-control','placeholder'=>"Slug de la categoría",'readonly'])!!}
        </div>
        @error('slug')
            <span class="text-danger">{{$message}}</span>      
        @enderror

       <div class="form-group">
        {!!Form::label('color','Color')!!}
        {!!Form::select('color',$colors,null,['class'=>'form-control'])!!}
       </div>
       @error('color')
       <span class="text-danger">{{$message}}</span>      
   @enderror

        {!!Form::submit('Crear etiqueta',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    </div>
</div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">

    </script>

    <script>
        $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
    </script>
@endsection

