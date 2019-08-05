@extends('layouts.layout')

@section('principal')
<section class="row justify-content-center">
    <div class="col-12 col-sm-10">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img\events_single_one.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img\events_single_two.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img\events_single_three.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>
</section>
<section class="row justify-content-center">
    <div class="col-12 col-sm-10 my-4">
        <h2 class="text-center m-3">Noticias</h2>
        <div class="row grid">
            @foreach ($noticia as $n)
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-3 grid-item">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/noticia/'.$n->imagem) }}" alt="">
                        <div class="card-body">
                            <h4>{{ $n->titulo }}</h4>
                            @php
                            $text = str_replace('</p>', '', $n->texto);
                            $array = explode('<p>', $text);
                            @endphp
                            <p>{{ $array[1] }}</p>
                            <p class="text-center">
                                <a class="btn btn-success" href="{{ route('noticia.show', [$n->id,str_slug($n->titulo)]) }}">Ver mais</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="bg-success row justify-content-center">
    <div class="col-12 col-sm-10 my-4">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6 text-sm-right text-center">
                <h2 class="text-white">Fique Atualizado!</h2>
                <p class="text-white">Cadastre seu email para que seja avisado sobre novidades</p>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Digitar Email</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Email">
                                <small id="helpId" class="form-text text-muted">O email deverar ser validado!</small>
                            </div>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <button type="reset" class="btn btn-outline-success">Limpar Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="row justify-content-center">
    <div class="col-12 col-sm-10 my-4">
        <h2 class="text-center m-3">Eventos</h2>
        <div class="row grid">
            @foreach ($eventos as $n)
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-3 grid-item">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/evento/'.$n->imagem) }}" alt="">
                        <div class="card-body">
                            <h4>{{ $n->titulo }}</h4>
                            @php
                            $text = str_replace('</p>', '', $n->texto);
                            $array = explode('<p>', $text);
                            @endphp
                            <p>{{ $array[1] }}</p>
                            <p class="text-center">
                                <a class="btn btn-success" href="{{ route('evento.show', [$n->id,str_slug($n->titulo)]) }}">Ver mais</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="inscrever" class="bg-success row justify-content-center">
    <div class="col-12 col-sm-10 my-4">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6 text-sm-right text-center">
                <h2 class="text-white">Inscreva-se em um evento!</h2>
                <p class="text-white">Inscreva-se aqui para participar</p>
            </div>
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('inscrever') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Nome Completo">
                                @if ($errors->has('nome'))
                                <script>
                                    document.getElementById("nome").focus();
                                </script>
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="CPF">
                                @if ($errors->has('cpf'))
                                <script>
                                    document.getElementById("cpf").focus();
                                </script>
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tel">Telefone</label>
                                <input type="tel" class="form-control" name="tel" id="tel" value="{{ old('tel') }}" placeholder="Telefone">
                                @if ($errors->has('tel'))
                                <script>
                                    document.getElementById("tel").focus();
                                </script>
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                                @if ($errors->has('email'))
                                <script>
                                    document.getElementById("email").focus();
                                </script>
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="evento">Evento</label>
                                <select class="form-control" name="evento" id="evento">
                                    <option value=""></option>
                                    @foreach ($e_insc as $e)
                                        <option value="{{ $e->id }}">{{ $e->titulo }}</option>                                        
                                    @endforeach
                                </select>
                                @if ($errors->has('evento'))
                                <script>
                                    document.getElementById("evento").focus();
                                </script>
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('evento') }}</strong>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <button type="reset" class="btn btn-outline-success">Limpar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="row justify-content-center">
    <div class="col-12 col-sm-10 my-4">
        <h2 class="text-center m-3">Artigos</h2>
        <div class="row grid">
            @foreach ($artigos as $a)
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-3 grid-item">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center">{{ $a->titulo }}</h4>
                            <p class="card-text">{{ $a->key }}</p>
                            <p class="card-text">{{ $a->autores }}</p>
                            <p class="card-text text-center">{{ date('d-m-Y',strtotime($a->created_at)) }}</p>
                            <p class="text-center">
                                <a class="btn btn-success" href="{{ route('artigo.show', [$a->id,str_slug($a->titulo)]) }}">Ver mais</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@stop