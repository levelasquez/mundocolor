<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th colspan="2">Acciones</th>
    </tr>
    @foreach ($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-xs">Editar</a>
            </td>
            <td>
                {!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE']) !!}
                    <button type="submit" onclick="return confirm('Seguro que desea eliminar el usuario?')" class="btn btn-danger btn-xs">Eliminar</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>