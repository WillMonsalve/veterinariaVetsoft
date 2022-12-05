<div class="form-group">
    {!! Form::label('name', 'Nombre del permiso') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del permiso']) !!}

    
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('description', 'Descripcion del permiso') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del permiso']) !!}
    
    
    @error('description')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror

</div>
    