@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Usuario: {{ $user->name }}</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        @include('admin.partials.messages')
                        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
                            @include('admin.users.partials.fields')
                            <button type="submit" class="btn btn-info">Actualizar Usuario</button>
                            <a href="/admin/users" class="btn btn-default">Regresar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
@endsection