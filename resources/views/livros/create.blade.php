<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando um livro</title>
</head>
<body>
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
    
</body>
</html>

