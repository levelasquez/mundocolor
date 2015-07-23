@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        {!! Form::model(Request::all(), ['route' => 'admin.productos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del producto']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                        {!! Form::close() !!}
                        <p>
                            <a class="btn btn-info" href="{{ route('admin.productos.create') }}" role="button">
                                Nuevo Producto
                            </a>
                        </p>
                        <p>Hay {{ $productos->total() }} Productos</p>
                        @include('admin.productos.partials.table')
                        {!! $productos->appends(Request::only(['name']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection