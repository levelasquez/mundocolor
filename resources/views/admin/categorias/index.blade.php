@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorias</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        {!! Form::model(Request::all(), ['route' => 'admin.categorias.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria']) !!}
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                        {!! Form::close() !!}
                        <p>
                            <a class="btn btn-info" href="{{ route('admin.categorias.create') }}" role="button">
                                Nueva Categoria
                            </a>
                        </p>
                        <p>Hay {{ $categorias->total() }} Categorias</p>
                        @include('admin.categorias.partials.table')
                        {!! $categorias->appends(Request::only(['name']))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection