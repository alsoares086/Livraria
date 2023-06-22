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
            <p>Titulo: {{$livro->titulo}}</p> <br> 
            <p>Autor: {{$livro->autor}}</p> <br> 
            <p>Ano: {{$livro->ano_publicacao}}</p> <br> <br> <br>
        @endforeach
    @else
        <p>não tem livros</p>
    @endif
</body>
</html>