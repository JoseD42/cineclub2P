<?php

namespace App\Http\Controllers;
use App\Models\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{ 

    public function index()
    {
        $generos = Genero::all(); // recupera todos los géneros de la base de datos
        return view('admingeneros.index', ['generos' => $generos]); // pasa los géneros a la vista
    }

    public function admingeneros()
    {
        $generos = Generos::all();
        return view('vistas.admingeneros', ['generos' => $generos]);
    } 

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $genero = new Generos();
        $genero->nombre = $request->input('nombre');
        $genero->save();
    
        return redirect()->route('vistas.admingen');
    }

}