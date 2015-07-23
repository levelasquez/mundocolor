@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Producto: {{ $producto->nombre }}</div>
                    <div class="panel-body">
                        <div class="col-lg-6 col-lg-offset-1 col-md-6 col-sm-12 pull-right">
                            <div class="editContent">
                                <h1>{{ $producto->nombre }}</h1>
                            </div>
                            <div class="editContent">
                                <p class="lead">{{ $producto->descripcion }}</p>
                            </div>
                            <div class="editContent">
                                <p><strong>Categoria:</strong> {{ $producto->categoria->categoria }}</p>
                            </div>
                            <div class="editContent">
                                <p><strong>Precio:</strong> {{ $producto->precio }} Bs.F</p>
                            </div>
                            <div class="editContent">
                                <p><strong>Disponibles:</strong> {{ $producto->disponible }}</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-12">
                                    <a href="{{ route('admin.productos.edit', $producto) }}" class="btn btn-warning btn-xs">Editar</a>
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    {!! Form::open(['route' => ['admin.productos.destroy', $producto], 'method' => 'DELETE']) !!}
                                    <button type="submit" onclick="return confirm('Seguro que desea eliminar el producto?')" class="btn btn-danger btn-xs">Eliminar</button>
                                    {!! Form::close() !!}
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <a href="/admin/productos" class="btn btn-default btn-xs">Regresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 pull-left">
                            <img class="img-responsive" src="/images/productos/{{ $producto->id }}.png" width="600" height="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection