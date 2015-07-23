<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'disponible',
        'image',
        'categoria_id'
    ];

    public static function filterAndPaginate($name)
    {
        return Producto::name($name)
            ->orderBy('id', 'DESC')
            ->paginate();
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombre', "LIKE", "%$name%");
        }
    }
}
