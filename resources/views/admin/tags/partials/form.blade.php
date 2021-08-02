<div class="form-group">
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>"ingrese nombre de la categoría"])!!}
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