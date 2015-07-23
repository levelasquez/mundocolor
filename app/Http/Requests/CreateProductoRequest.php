<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request
{
    /**
     * Determinar si el usuario esta autorizado para hacer el request
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Reglas de validación que aplica el request
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:10',
            'precio' => 'required|numeric',
            'disponible' => 'required|numeric',
            'image' => 'required|mimes:jpeg,gif,png',
            'categoria_id' => 'required'
        ];
    }
}