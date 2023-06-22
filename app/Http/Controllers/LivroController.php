<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

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
        //
    }
    public function store(Request $request){
    $livro = new Livro;
    $livro->titulo = $request->input('titulo');
    $livro->autor = $request->input('autor');
    $livro->ano_publicacao = $request->input('ano');
    $livro->save();

    return redirect('/');
}

    /*
     * Store a newly created resource in storage.
     
    public function store(Request $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     */
    public function show()
    {
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
        //
    }
}
