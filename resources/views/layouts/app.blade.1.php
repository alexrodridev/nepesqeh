<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NepesqEH - Painel</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('s.css') }}" rel="stylesheet">
</head>
<body>
	<main class="container-fluid">
		<header>
			<section class="row justify-content-center" id="topo">
				<div class="col-md-10 p-md-3">
					<div class="float-left">
						Phone: +55 96 984058000 Email: suporte@gmail.com
					</div>
					@if (Route::has('login'))
						<div class="float-right">
								@auth
									Olá {{ Auth::user()->name }}
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SAIR</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								@else
									<a href="{{ route('login') }}">ENTRAR</a>
									@if (Route::has('register'))
										<a href="{{ route('register') }}">REGISTRAR</a>
									@endif
								@endauth
						</div>
					@endif
				</div>
			</section>
			<section id="pe" class="row justify-content-center">
				<nav class="col-md-10 navbar navbar-expand-sm navbar-light">
					<a class="navbar-brand" href="#">
						<img src="{{ asset('img/NEPesqEH.png') }}" width="100px" height="100px" alt=""> NepesqEH
					</a>
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
							aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item">
								<a href="/" class="nav-link">INICIAL</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('noticia.listar') }}" class="nav-link">NOTÍCIAS</a>
							</li>
							<li class="nav-item">
								<a href="#tab1Id" class="nav-link">ARTIGOS</a>
							</li>
							<li class="nav-item">
								<a href="#tab1Id" class="nav-link">INSCRIÇÕES</a>
							</li>
							<li class="nav-item">
								<a href="#tab1Id" class="nav-link">EVENTOS</a>
							</li>
							<li class="nav-item">
								<a href="#tab1Id" class="nav-link">SOBRE NÓS</a>
							</li>
							<li class="nav-item">
								<a href="#tab1Id" class="nav-link">CONTATOS</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
								<div class="dropdown-menu" aria-labelledby="dropdownId">
									<a class="dropdown-item" href="#">Action 1</a>
									<a class="dropdown-item" href="#">Action 2</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</section>
		</header>
		<section>
			@yield('content')
		</section>
		<footer class="row justify-content-center">
			<aside class="footer_carosal_icon owl-carousel owl-theme">
				<img class="p-2 p-md-5" src="{{ asset('img/alexrodri.png') }}" alt="">
				<img class="p-2 p-md-5" src="{{ asset('img/microsoft.png') }}" alt="">
				<img class="p-2 p-md-5" src="{{ asset('img/envato.png') }}" alt="">
				<img class="p-2 p-md-5" src="{{ asset('img/yahoo.png') }}" alt="">
			</aside>
			<section class="col-md-12 row justify-content-center">
				<div class="col-md-4 py-2">
					<h2>NEPESQEH</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
				</div>
				<div class="col-md-2 py-2">
					<h4>POSTS RECENTES</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
				</div>
				<div class="col-md-2 py-2">
					<h4>LINKS ÚTEIS</h4>
					<!-- Nav tabs -->
					<nav class="nav nav-tabs" id="navId">
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">INICIAL</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">NOTÍCIAS</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">ARTIGOS</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">INSCRIÇÕES</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">EVENTOS</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">SOBRE NÓS</a>
						</li>
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">CONTATOS</a>
						</li>
					</nav>
				</div>
				<div class="col-md-2 py-2">
					<h4>CONTATO DESENVOLVEDOR</h4>
					<p>Alex Rodrigues</p>
					<p>+55 96 984058000</p>
					<p>www.alerodri.tk</p>
				</div>
			</section>
			<section id="bottom" class="col-12 text-center row text-white justify-content-center">
				<p class="m-3">Copyright @ 2019 <a href="#">NepesqEH</a> | All Rights Reserved | Desenvolvido por <a href="#">Alex Rodrigues</a></p>
			</section>
		</footer>
	</main>
	
	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('ckeditor5-build-classic/ckeditor.js') }}"></script>
	<script src="{{ asset('ckeditor5-build-classic/translations/pt-br.js') }}"></script>
  <script src="{{ asset('js/animationCounter.js') }}" defer></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('js/active.js') }}" defer></script>

	<script type="text/javascript">
		
		ClassicEditor
    .create( document.querySelector( '#editor' ), {
        // The language code is defined in the https://en.wikipedia.org/wiki/ISO_639-1 standard.
				language: 'pt-br'
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
		
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>
