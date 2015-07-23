<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del producto']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción del producto']) !!}
</div>
<div class="form-group">
    {!! Form::label('precio', 'Precio') !!}
    {!! Form::number('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio del producto']) !!}
</div>
<div class="form-group">
    {!! Form::label('disponible', 'Disponibles') !!}
    {!! Form::number('disponible', null, ['class' => 'form-control', 'placeholder' => 'Cuanto dispones de este producto']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Imagen del Producto') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
</div>