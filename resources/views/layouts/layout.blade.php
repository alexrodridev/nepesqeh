<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NepesqEH</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    
    <main class="container-fluid">
        <header class="row justify-content-center">
            <nav class="navbar col-12 navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="/"><h1>NepesqEH</h1></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('noticia.listar') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('evento.listar') }}">Eventos</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-success" href="#inscrever">Inscrever</a>
                        &nbsp;
                        <a class="btn btn-outline-success" href="{{ route('home' )}}">Entrar</a>
                    </form>
                </div>
            </nav>
        </header>
        @yield('principal')
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
                    <div class="fb-page" 
                    data-href="https://www.facebook.com/NepesqEH"
                    data-width="380" 
                    data-hide-cover="false"
                    data-show-facepile="true"></div>
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
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>
    
    <script type="text/javascript">
        $('.grid').masonry({
			// options...
			itemSelector: '.grid-item',
		});
    </script>
</body>

</html>