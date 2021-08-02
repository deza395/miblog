{{-- etiqueta nombre --}}
<div class="form-group">
    {!!Form::label('name','Nombre',)!!}
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'ingrese nombre del post'])!!}
    @error('name')
        <small class="text-danger" > {{$message}}</small>
    @enderror
   </div>

   {{-- etiqueta slug --}}
   <div class="form-group">
    {!!Form::label('slug','Slug',)!!}
    {!!Form::text('slug',null,['class'=>'form-control', 'placeholder'=>'slug','readonly'])!!}
    @error('slug')
       <small class="text-danger" > {{$message}}</small>
     @enderror
   </div> 


{{-- etiqueta categoria --}}
   <div class="form-group">
       {!! Form::label('category_id','categoria')!!}
       {!! Form::select('category_id',$categories,null,['class'=>'form-control'])!!}    
       @error('category_id')
         <small class="text-danger" > {{$message}}</small>
       @enderror
   </div>

   {{-- etiqueta tags --}}
   <div class="form-group">
     <p class="font-weight-bold">Etiquetas</p>
     @foreach ($tags as $tag)
     <label for="" class="mr-2">
      {!! Form::checkbox('tags[]',$tag->id,null)!!}    
      {{$tag->name}}
     </label>      
     @endforeach
     @error('tags')
         <small class="text-danger" > {{$message}}</small>
       @enderror
     
   </div>

   {{-- etiqueta extract --}}
   <div class="form-group">
    {!!Form::label('extract','Extracto',)!!}
    {!!Form::textarea('extract',null,['class'=>'form-control', 'placeholder'=>'ingrese extracto del post'])!!}
     @error('extract')
        <small class="text-danger" > {{$message}}</small>
    @enderror
   </div>


   {{-- etiqueta imagenes --}}
   
   <div class="row mb-3">
    <div class="col">
      <div class="image-wrapper">
       @isset ($post->image) 
       <img src="{{Storage::url($post->image->url)}}" alt="" id="picture" >    
       @else
       <img id='picture' src="https://cdn.pixabay.com/photo/2021/07/11/10/39/fantasy-6403406_960_720.jpg" alt="">           
     
       @endisset
        </div> 
    </div>
    <div class="col">
      <div class="form-group">
        {!! Form::label('file','imagen que se mostrara en el post')!!}
        {!! Form::file('file',['class'=>'form-control-file','accept'=>'image/*'])!!}
        @error('file')
        <span class="text-danger" > {{$message}}</span>
      @enderror
      </div>
     
     <p>Ponga una imagen relacionada con el post por favor.</p>
    </div>
  </div>

 
{{-- etiqueta body --}}   
   <div class="form-group">
    {!! Form::label('body','contenido')!!}
    {!! Form::textarea('body',null,['class'=>'form-control'])!!}  
    @error('body')
    <small class="text-danger" > {{$message}}</small>
    @enderror
   </div>

{{-- etiqueta estado --}}
   <div class="form-group">
       <p class="font-weight-bold">Estado</p>
       <label >
            {!! Form::radio('status',1,true)!!}  
            Borrador
       </label>
       <label >
            {!! Form::radio('status',2)!!}  
            Publicado
       </label>
       @error('status')
        <small class="text-danger" > {{$message}}</small>
       @enderror
   </div>