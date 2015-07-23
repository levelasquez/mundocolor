@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nueva Categoria</div>
                    <div class="panel-body">
                        @include('admin.partials.messages')
                        {!! Form::open(['route' => 'admin.categorias.store', 'method' => 'POST']) !!}
                            @include('admin.categorias.partials.fields')
                            <button class="btn btn-info" type="submit">Crear Categoria</button>
                            <a href="/admin/categorias" class="btn btn-default">Regresar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection