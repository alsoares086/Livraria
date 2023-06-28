@extends('layouts.main')
@section ('title', 'Cadastrando um livro')

@section ('content')
<div class="form-container">
    <form action="/livros" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" class="form-control">
        </div>
        <div class="form-group">
            <label for="ano">Ano de Publicação:</label>
            <input type="text" name="ano" id="ano" class="form-control">
        </div>
        <div class="form-group">
            <label for="capa">Capa do Livro:</label>
            <input type="file" name="capa" id="capa" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="genero">Gênero:</label>
            <select name="genero" id="genero" class="form-control">
                @foreach($generos as $genero)
                    <option value="{{ $genero->id }}">{{ $genero->nome }}</option>
                @endforeach
            </select>
        </div>
        <!-- Botão de submit -->
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
    </form>
</div>
@endsection




