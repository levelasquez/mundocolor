<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;
use App\Categoria;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\EditProductoRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['mostrar']]);
        $this->beforeFilter('@findProducto', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findProducto(Route $route)
    {
        $this->producto = Producto::findOrFail($route->getParameter('productos'));
    }
    /**
     * Listar productos
     */
    public function index(Request $request)
    {
        $productos = Producto::filterAndPaginate($request->get('name'));

        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Mostrar producto
     */
    public function show($id)
    {
        return view('admin.productos.show')->with('producto', $this->producto);
    }

    /**
     * Crear producto
     */
    public function create()
    {
        $categorias = Categoria::all()->lists('categoria', 'id');

        return view('admin.productos.create')->with('categorias', $categorias);
    }

    /**
     * Guardar producto
     */
    public function store(CreateProductoRequest $request)
    {
        $producto = Producto::create($request->all());

        $imageName = $producto->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(base_path() . '/public/images/productos/', $imageName);

        $message = 'El producto fue creado.';

        Session::flash('message', $message);

        return redirect()->route('admin.productos.index');
    }

    /**
     * Editar producto
     */
    public function edit($id)
    {
        $categorias = Categoria::all()->lists('categoria', 'id');

        return view('admin.productos.edit')->with(['producto' => $this->producto, 'categorias' => $categorias]);
    }

    /**
     * Actualizar producto
     */
    public function update($id, EditProductoRequest $request)
    {
        $this->producto->fill($request->all());
        $this->producto->save();

        $message = 'El producto fue actualizado.';

        Session::flash('message', $message);

        return redirect()->back();
    }

    /**
     * Borrar producto
     */
    public function destroy($id)
    {
        $this->producto->delete();

        $message = 'el producto ' . $this->producto->producto . ' fue eliminado.';

        Session::flash('message', $message);

        return redirect()->route('admin.productos.index');
    }

    public function mostrar()
    {
        $productos = Producto::orderBy('nombre', 'ASC')->paginate(9);

        return view('productos', compact('productos'));
    }
}
