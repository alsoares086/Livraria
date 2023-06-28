@extends('layouts.main')
@section ('title', 'Cadastrando um livro')

@section ('content')
<h1>Livros</h1>

<section class="livros-section">
    @if(count($livros) > 0)
        @foreach($livros as $livro)
         <div class="livro">
        <h3>Livro {{$loop->index + 1}}</h3>
        @if($livro->capa)
                <img src="/img/capas/{{$livro->capa}}" alt="Capa do Livro" class="img-capa">
            @else
                <p>Capa indisponível</p>
            @endif
            <br>
            <p>Titulo: {{$livro->titulo}}</p>
            <p>Autor: {{$livro->autor}}</p>
            <p>Ano: {{$livro->ano_publicacao}}</p>
            <p>Gênero: {{$livro->genero->nome}}</p>
            <br> 
        </div>
        @endforeach
    @else
        <p>não tem livros</p>
    @endif
</section>
@endsection
