<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Livros</h1>
    @if(count($livros) > 0)
        @foreach($livros as $livro)
            <h3>Livro {{$loop->index + 1}}</h3>
            <p>Titulo: {{$livro->titulo}}</p>
            <p>Autor: {{$livro->autor}}</p>
            <p>Ano: {{$livro->ano_publicacao}}</p>
            <p>Gênero: {{$livro->genero->nome}}</p>
            @if($livro->capa)
                <img src="{{ asset('storage/' . $livro->capa) }}" alt="Capa do Livro">
            @else
                <p>Capa indisponível</p>
            @endif
            <br> <br> <br>
        @endforeach
    @else
        <p>não tem livros</p>
    @endif
</body>
</html>
