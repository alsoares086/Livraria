@extends('layouts.main')
@section ('title', 'Cadastrando um livro')

@section ('content')
<div class="cards-list">
  <div class="card 1">
      <div class="card_image">
        <img src="https://img.freepik.com/vetores-premium/o-personagem-de-desenho-de-pessoas-lendo-um-livro_73637-440.jpg?w=2000"/>
      </div>
      <div class="card_title title-white">
      <a href="{{ asset('/livros/mostrar')}}" > <p>Acesse seus livros</p></a>
      </div>
    </div>

  <div class="card 2">
    <div class="card_image">
      <img src="https://img.freepik.com/vetores-premium/livro-de-leitura-do-homem-no-sofa-adulto-relaxado-le-no-sofa-com-o-gato-em-casa-leitor-de-mao-desenhada-curtindo-o-hobby-conceito-de-vetor-de-estilo-de-vida-de-lazer-estudo-de-homem-no-sofa-com-ilustracao-de-livro_102902-3775.jpg"/>
    </div>
    <div class="card_title title-white">
    <a href="{{ asset('/livros/create')}}" ><p>Cadastre seus livros</p></a>
    </div>
  </div>

</div>
@endsection


