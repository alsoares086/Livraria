<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Genero;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livros.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        return view('livros.create', compact('generos'));
    }
    public function store(Request $request){
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano' => 'required',
            'capa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genero' => 'required|exists:generos,id',
        ]);

        $livro = new Livro;
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->ano_publicacao = $request->input('ano');

        // Armazena a capa do livro
        if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
            $path = $request->file('capa')->store('livros');
            $livro->capa = $path;
        }

        // Define o gênero do livro
        $generoId = $request->input('genero');
        $genero = Genero::findOrFail($generoId);
        $livro->genero()->associate($genero);

        $livro->save();        
    }

    /** 
     * Display the specified resource.
     */
    public function show()    {
        $livros = Livro::all();
        return view('/livros/mostrar',['livros'=>$livros]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
