<div class="form-group">
  {!! Form::label('name', 'Nombre:') !!}
  {!! Form::text('name', null, ['class'=> 'form-control',
                 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
  @error('name')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-group">
  {!! Form::label('slug', 'Nombre:') !!}
  {!! Form::text('slug', null, ['class'=> 'form-control',
                 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly']) !!}
</div>
<div class="form-group">
  <!-- <label for="">Color</label>
  <select class="form-control" name="color">
    <option value="red">Color rojo</option>
    <option value="green">Color verde</option>
    <option value="blue" selected>Color azul</option>
  </select> -->
  {!! Form::label('color', 'Color:') !!}
  {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
  @error('color')
    <small class="text-danger">{{$message}}</small>
  @enderror
</div>
