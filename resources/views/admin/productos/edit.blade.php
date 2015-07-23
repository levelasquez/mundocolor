@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Producto: {{ $producto->nombre }}</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        @include('admin.partials.messages')
                        {!! Form::model($producto, ['route' => ['admin.productos.update', $producto], 'method' => 'PUT']) !!}
                        @include('admin.productos.partials.fields')
                        <button class="btn btn-info" type="submit">Actualizar Producto</button>
                        <a href="/admin/productos" class="btn btn-default">Regresar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.productos.partials.delete')
            </div>
        </div>
    </div>
@endsection