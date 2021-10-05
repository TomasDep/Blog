<div class="form-group">
  {!! Form::label('name', 'Nombre:') !!}
  {!! Form::text('name', null, ['class' => 'form-control',
                  'placeholder' => 'Ingrese el nombre del post']) !!}
  @error('name')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  {!! Form::label('slug', 'Slug:') !!}
  {!! Form::text('slug', null, ['class' => 'form-control',
                  'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}
  @error('slug')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  {!! Form::label('category_id', 'Categoría') !!}
  {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
  @error('category_id')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  <p class="font-weight-bold">Etiquetas</p>
  @foreach ($tags as $tag)
    <label class="mr-3">
      {!! Form::checkbox('tags[]', $tag->id, null) !!}
      {{$tag->name}}
    </label>
  @endforeach
  @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  <p class="font-weight-bold">Estado</p>
  <label>
    {!! Form::radio('status', 1, true) !!}
    Borrador
  </label>
  <label>
    {!! Form::radio('status', 2) !!}
    Publicado
  </label>
  @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="row mb-3">
  <div class="col">
    <div class="image-wrapper">
      @isset ($post->image)
        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
      @else
        <img id="picture" src="https://cdn.pixabay.com/photo/2021/04/15/10/46/almond-tree-6180802_960_720.jpg" alt="">
      @endisset
    </div>
  </div>

  <div class="col">
    <div class="form-group">
      {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
      {!! Form::file('file', ['class' => 'form-control-file', 'accepted' => 'image/*']) !!}
      @error('file')
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
      dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
      anim id est laborum.</p>
  </div>
</div>

<div class="form-group">
  {!! Form::label('extract', 'Extracto') !!}
  {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
  @error('extract')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-group">
  {!! Form::label('body', 'Cuerpo del Post') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
  @error('body')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>
