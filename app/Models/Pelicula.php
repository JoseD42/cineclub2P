<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    //Especificar a que tabla se conecta
    protected $table = 'peliculas';

    public function genero()
    {
        return $this->belongsTo('App\Models\Generos', 'id_genero');
    }
}