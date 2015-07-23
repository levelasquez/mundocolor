@extends('templates/master')
@section('contenido')
    <div class="bs-docs-featurette">
        <div class="container">
            <h2 class="bs-docs-featurette-title">Nuestros Productos</h2><br>
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col-sm-6 col-md-4">
                        <img class="img-circle center-block" src="/images/productos/{{ $producto->id }}.png">
                        <h3 class="titulo-centrado">{{ $producto->nombre }}</h3>
                        <p class="texto-justificado"><strong>Descripción: </strong>{{ $producto->descripcion }}</p>
                        <p class="texto-justificado"><strong>Categoria: </strong>{{ $producto->categoria->categoria }}</p>
                        <p class="texto-justificado"><strong>Precio: </strong>{{ $producto->precio }} Bs.F</p>
                        <p class="texto-justificado"><strong>Disponibles: </strong>{{ $producto->disponible }}</p>
                    </div>
                @endforeach
            </div>
            {!! $productos->render() !!}
        </div>
    </div>
@stop