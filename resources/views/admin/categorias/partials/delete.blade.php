{!! Form::open(['route' => ['admin.categorias.destroy', $categoria], 'method' => 'DELETE']) !!}
    <button type="submit" onclick="return confirm('Seguro que desea eliminar la categoria?')" class="btn btn-danger">Eliminar Categoria</button>
{!! Form::close() !!}