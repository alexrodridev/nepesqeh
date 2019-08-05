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
    <div class="wrapper">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="contact">
                                <p><span class="phone"><a href="#">Telefone: +5596900000000</a></span><span class="email"><a href="#">Email: testdomain@gmail.com</a></span></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                         @if (Route::has('login'))
                            <div class="join-us">
                                <p>
                                @auth
                                    <a href="{{ url('/home') }}">PAINEL</a>
                                @else
                                    <a href="{{ route('login') }}">ENTRAR</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">REGISTRAR</a>
                                    @endif
                                @endauth
                                </p>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <a href="/">
                                <div class="main-logo">
                                    <img src="{{ asset('img/NEPesqEH.png') }}" width="100px" height="100px" alt="">
                                    <h2>NEPESQEH</h2>
                                </div>
                            </a>
                        </div>
                        <nav class="navbar navbar-expand-sm navbar-light bg-light">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavId">
                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="/">INICIAL</a>
                                    <a class="nav-item nav-link" href="{{ route('noticia.listar') }}">NOTÍCIAS</a>
                                    <a class="nav-item nav-link" href="#">ARTIGOS</a>
                                    <a class="nav-item nav-link" href="#">INSCRIÇÕES</a>
                                    <a class="nav-item nav-link" href="#">EVENTOS</a>
                                    <a class="nav-item nav-link" href="#">SOBRE NÓS</a>
                                    <a class="nav-item nav-link" href="#">CONTATOS</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
        </header>
        
        @yield('principal')

        <section class="footer_carosal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_carosal_icon owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset('img/microsoft.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/envato.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/yahoo.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/jquery.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/amazon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>NEPESQEH</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="footer-text one">
                                    <h3>POSTS RECENTES</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing </a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>LINKS ÚTEIS</h3>
                                    <ul>
                                        <li><a href="#">INICIAL</a></li>
                                        <li><a href="#">NOTÍCIAS</a></li>
                                        <li><a href="#">ARTIGOS</a></li>
                                        <li><a href="#">INSCRIÇÕES</a></li>
                                        <li><a href="#">EVENTOS</a></li>
                                        <li><a href="#">SOBRE NÓS</a></li>
                                        <li><a href="#">CONTATOS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTATO DESENVOLVEDOR</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>1 Street, derby, FL 2147, USA</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>alexcleiton16@gmail.com</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+5596984058000</a></li>
                                        <li><a href="http://www.alexrodri.tk" target="blank"><i class="material-icons">open_in_new</i>www.alexrodri.tk</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p>Copyright @ 2019 <a href="#">NepesqEH</a> | All Rights Reserved | Desenvolvido por <a href="#">Alex Rodrigues</a></p>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/animationCounter.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/active.js') }}" defer></script>

    <script type="text/javascript">
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