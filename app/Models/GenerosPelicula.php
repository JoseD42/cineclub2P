<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroPelicula extends Model
{
    use HasFactory;
    //Especificar a que tabla se conecta
    protected $table = 'generos_pelicula';
}