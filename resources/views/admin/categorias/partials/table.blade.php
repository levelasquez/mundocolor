<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th colspan="2">Acciones</th>
    </tr>
    @foreach ($categorias as $categoria)
        <tr data-id="{{ $categoria->id }}">
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->categoria }}</td>
            <td>
                <a href="{{ route('admin.categorias.edit', $categoria) }}" class="btn btn-warning btn-xs">Editar</a>
            </td>
            <td>
                {!! Form::open(['route' => ['admin.categorias.destroy', $categoria], 'method' => 'DELETE']) !!}
                    <button type="submit" onclick="return confirm('Seguro que desea eliminar la categoria?')" class="btn btn-danger btn-xs">Eliminar</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>