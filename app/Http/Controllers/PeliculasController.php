<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use App\Models\Generos;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::with('genero')->get();
        return view('vistas.index', ['peliculas' => $peliculas]);
        
    }    

   public function añadirpeli()
   {
        $generos = Generos::all();
        return view('vistas.añadirpeli', ['generos' => $generos]);
   }
    
   public function store(Request $request)
    {
        $generos = Generos::all();
    
        $genero = Generos::where('nombre', $request->genero)->first();
    
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->duracion = $request->duracion;
        $pelicula->año = $request->año;
        $pelicula->director = $request->director;
        $pelicula->id_genero = $request->input('genero');
    
        // Guardar la película y el género asociado en la tabla de películas
        $pelicula->save();
        //$pelicula->generos()->attach($genero->id);
    
        // Redirigir al usuario a la lista de películas
        return redirect()->route('vistas.index');
    }
    

}