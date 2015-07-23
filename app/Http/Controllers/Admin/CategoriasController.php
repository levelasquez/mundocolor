<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria;
use App\Http\Requests\CreateCategoriaRequest;
use App\Http\Requests\EditCategoriaRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class CategoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@findCategoria', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findCategoria(Route $route)
    {
        $this->categoria = Categoria::findOrFail($route->getParameter('categorias'));
    }
    /**
     * Mostrar categorias
     */
    public function index(Request $request)
    {
        $categorias = Categoria::filterAndPaginate($request->get('name'));

        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Crear categoria
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Guardar categoria
     */
    public function store(CreateCategoriaRequest $request)
    {
        $categoria = Categoria::create($request->all());

        $message = 'La categoria fue creada.';

        Session::flash('message', $message);

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Editar categoria
     */
    public function edit($id)
    {
        return view('admin.categorias.edit')->with(['categoria' => $this->categoria]);
    }

    /**
     * Actualizar categoria
     */
    public function update(EditCategoriaRequest $request, $id)
    {
        $this->categoria->fill($request->all());
        $this->categoria->save();

        $message = 'La categoria fue actualizada.';

        Session::flash('message', $message);

        return redirect()->back();
    }

    /**
     * Borrar categoria
     */
    public function destroy($id)
    {
        $this->categoria->delete();

        $message = 'La categoria ' . $this->categoria->categoria . ' fue eliminada.';

        Session::flash('message', $message);

        return redirect()->route('admin.categorias.index');
    }
}
