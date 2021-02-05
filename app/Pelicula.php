<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //Atributos de la clase
    protected $fillable=['titulo','anio_estreno','disponibilidad'];

    public function getRouteKeyName()
    {
        return 'id';
    }
    //Relacion de 1 a 1 Pelicula->Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
}
