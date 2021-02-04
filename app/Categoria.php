<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    //Atributos de la clase
    protected $fillable=['nombre_categoria'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    /*Relacion de 1 a 1..* Categoria->pelicula*/
    public function peliculas()
    {
        return $this->hasMany(Pelicula::class);
    }
}