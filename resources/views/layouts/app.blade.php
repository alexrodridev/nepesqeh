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
</head>
<body>
	<main class="container-fluid">
		<header>
			<section class="row justify-content-center">
				<nav class="navbar navbar-expand-md navbar-light bg-light col-12">
					<a class="navbar-brand" href="/">NespesqEH</a>
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
							aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notícia</a>
								<div class="dropdown-menu" aria-labelledby="dropdownId">
									<a class="dropdown-item" href="{{ route('noticia.create') }}">Cadastrar nova notícia</a>
									<a class="dropdown-item" href="{{ route('noticia.index') }}">Listar notícias</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Evento</a>
								<div class="dropdown-menu" aria-labelledby="dropdownId">
									<a class="dropdown-item" href="{{ route('evento.create') }}">Cadastrar novo evento</a>
									<a class="dropdown-item" href="{{ route('evento.index') }}">Listar eventos</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artigos</a>
								<div class="dropdown-menu" aria-labelledby="dropdownId">
									<a class="dropdown-item" href="{{ route('artigo.create') }}">Cadastrar novo artigo</a>
									<a class="dropdown-item" href="{{ route('artigo.index') }}">Listar artigos</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item">
								<span class="nav-link">Olá {{ Auth::user()->name }}</span>
							</li>
							<li class="nav-item">
								<a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</div>
				</nav>
			</section>
		</header>
		<section>
			@yield('content')
		</section>
		<footer class="row bg-light justify-content-center">
			<section class="col-md-12 row justify-content-center">
				<div class="col-12 col-sm-6 col-md-3 py-4">
					<h4>NEPESQEH</h4>
					<p>Texto</p>
				</div>
				<div class="col-12 col-sm-6 col-md-3 py-4">
					<h6>POSTS RECENTES</h6>
					<p>Post</p>
				</div>
				<div class="col-12 col-sm-6 col-md-3 py-4">
					<h6>LINKS ÚTEIS</h6>
					<nav class="nav nav-tabs" id="navId">
						<li class="nav-item">
							<a href="#tab1Id" class="nav-link">INICIAL</a>
						</li>
					</nav>
				</div>
				<div class="col-12 col-sm-6 col-md-3 py-4">
					<h6>DESENVOLVEDOR</h6>
					<p>Alex Rodrigues</p>
					<p>+55 96 984058000</p>
					<p>www.alexrodri.tk</p>
				</div>
			</section>
			<section class="col-12 text-center bg-white row justify-content-center">
				<p class="m-3">Copyright @ 2019 <a href="#">NepesqEH</a> | All Rights Reserved | Desenvolvido por <a href="#">Alex Rodrigues</a></p>
			</section>
		</footer>
	</main>
	
	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/masonry.pkgd.js') }}"></script>
	<script src="{{ asset('ckeditor5-build-classic/ckeditor.js') }}"></script>
	<script src="{{ asset('ckeditor5-build-classic/translations/pt-br.js') }}"></script>
	<script type="text/javascript">

		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('.grid').masonry({
			// options...
			itemSelector: '.grid-item',
		});
		
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
		
	</script>
</body>
</html>
