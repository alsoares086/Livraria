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
            'capa' => 'required|image|mimes:jpeg,png,jpg',
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
            
            $requestImg = $request->capa;
            $extension = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName() . strtotime(now())) . "." . $extension;
            $requestImg->move(public_path('img/capas'), $imageName);
        
            $livro->capa = $imageName;
        }

        // Define o gênero do livro
        $generoId = $request->input('genero');
        $genero = Genero::findOrFail($generoId);
        $livro->genero()->associate($genero);

        $livro->save();
         
        //return view('livros.mostrar',['livros'=>$livro]);
        //return view('livros.index');

        $livros = Livro::all();
        return view('livros.mostrar', compact('livros'));
    
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
         //código para retornar o formulário com os dados do livro em uma view de edição
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Código para atualizar os dados do livro
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = Livro::findOrFail($id);

        // Remove a capa do livro, se existir
        if ($livro->capa) {
            Storage::delete($livro->capa);
        }
    
        $livro->delete();
    
        return redirect()->route('livros.mostrar');
    }
}
