<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCategoriaRequest extends Request
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
            'categoria' => 'required|min:3|unique:categorias,categoria'
        ];
    }
}
