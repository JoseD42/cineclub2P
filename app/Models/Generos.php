<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    //Especificar a que tabla se conecta
    protected $table = 'generos';

    public function peliculas()
    {
        return $this->hasMany('App\Models\Pelicula', 'id_genero');
    }
}