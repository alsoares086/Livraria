<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <meta name="theme-color" content="#ffcc00">
  <meta name="author" content="iago">
  <meta name="description" content="Bem vindo a Sua Livraria Perfeita temos
  de tudo e mais um pouco desde de Mangas até aquilo que você procura,na nossa
  casa de Livros não há nada faltando para você">
  <link rel="shortcut icon" href="icone.png">
  <link rel="icon" sizes="192x192" href="img/icone.png">
  <link rel="apple-touch-icon" href="img/icone.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/livraria.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<header class="cd-header">
		<div class="header-wrapper">
			<div class="logo-wrap">
				<a href="#" class="hover-target"><span>MY </span>livraria</a>
			</div>
			<div class="nav-but-wrap">
				<div class="menu-icon hover-target">
					<span class="menu-icon__line menu-icon__line-left"></span>
					<span class="menu-icon__line"></span>
					<span class="menu-icon__line menu-icon__line-right"></span>
				</div>					
			</div>					
		</div>				
	</header>


	<div class="nav">
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="{{ asset('/livros') }}" class="hover-target">home</a></li>
				<li class="nav__list-item"><a href="{{ asset('/livros/create') }}" class="hover-target">Cadastrar</a></li>
				<li class="nav__list-item"><a href="{{ asset('/livros/mostrar') }}" class="hover-target">Livros</a></li>
			</ul>
		</div>
	</div>		

	<div class="section full-height over-hide">	
		<div class="switch-wrap">
			<h1></h1>
			<div id="switch" class="hover-target">
				<div id="circle"></div>
			</div>
			<p><span>dark</span> - <span>light</span></p>
		</div>
	</div>	
	
	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>

  
  @yield('content')
  <footer>
  <br>
  <p>My Livraria &copy; 2023</p>
  </footer>

  <script src="{{ asset('/js/livraria.js') }}"></script>

</body>
</html>