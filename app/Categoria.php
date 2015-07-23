<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'categoria'
    ];

    public static function filterAndPaginate($name)
    {
        return Categoria::name($name)
            ->orderBy('id', 'DESC')
            ->paginate();
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('categoria', "LIKE", "%$name%");
        }
    }
}
