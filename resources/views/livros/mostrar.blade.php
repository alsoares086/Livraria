<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Lista de Livros</title>
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
                <img src="/img/capas/{{$livro->capa}}" alt="Capa do Livro" class="img-capa">
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
