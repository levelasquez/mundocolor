{!! Form::open(['route' => ['admin.productos.destroy', $producto], 'method' => 'DELETE']) !!}
    <button type="submit" onclick="return confirm('Seguro que desea eliminar el producto?')" class="btn btn-danger">Eliminar Producto</button>
{!! Form::close() !!}