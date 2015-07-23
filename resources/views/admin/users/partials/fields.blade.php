<div class="form-group">
    {!! Form::label('name', 'Nombre'); !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Correo electrónico'); !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su e-mail']); !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña'); !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su contraseña']) !!}
</div>
