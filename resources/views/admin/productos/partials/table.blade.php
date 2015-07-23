<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Disponibles</th>
        <th>Categoria</th>
        <th colspan="3">Acciones</th>
    </tr>
    @foreach ($productos as $producto)
        <tr data-id="{{ $producto->id }}">
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->disponible }}</td>
            <td>{{ $producto->categoria->categoria }}</td>
            <td>
                <a href="{{ route('admin.productos.show', $producto) }}" class="btn btn-info btn-xs">Ver</a>
            </td>
            <td>
                <a href="{{ route('admin.productos.edit', $producto) }}" class="btn btn-warning btn-xs">Editar</a>
            </td>
            <td>
                {!! Form::open(['route' => ['admin.productos.destroy', $producto], 'method' => 'DELETE']) !!}
                <button type="submit" onclick="return confirm('Seguro que desea eliminar el producto?')" class="btn btn-danger btn-xs">Eliminar</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>