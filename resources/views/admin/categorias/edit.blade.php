@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Categoria: {{ $categoria->categoria }}</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        @include('admin.partials.messages')
                        {!! Form::model($categoria, ['route' => ['admin.categorias.update', $categoria], 'method' => 'PUT']) !!}
                            @include('admin.categorias.partials.fields')
                            <button class="btn btn-info" type="submit">Actualizar Categoria</button>
                            <a href="/admin/categorias" class="btn btn-default">Regresar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.categorias.partials.delete')
            </div>
        </div>
    </div>
@endsection