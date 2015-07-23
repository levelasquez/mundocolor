@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Producto</div>
                    <div class="panel-body">
                        @include('admin.partials.messages')
                        {!! Form::open(['route' => 'admin.productos.store', 'method' => 'POST', 'files' => true]) !!}
                            @include('admin.productos.partials.fields')
                            <button class="btn btn-info" type="submit">Crear Producto</button>
                            <a href="/admin/productos" class="btn btn-default">Regresar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection