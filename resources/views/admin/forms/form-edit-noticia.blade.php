@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Editar noticia</h4>                 
                </div>
                <div class="card-body">
                    <form action="{{ route('noticia.update', $n->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            @if (old('titulo'))
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $n->titulo }}" value="{{ old('titulo') }}">
                            @else
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $n->titulo }}" value="{{ $n->titulo }}">    
                            @endif
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('titulo'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="keywords">Palavras-chaves</label>
                            @if (old('keywords'))
                                <input type="text" class="form-control" name="keywords" id="keywords" placeholder="{{ $n->keywords }}" value="{{ old('keywords') }}">
                            @else
                                <input type="text" class="form-control" name="keywords" id="keywords" placeholder="{{ $n->keywords }}" value="{{ $n->keywords }}">
                            @endif
                            <small class="form-text text-muted">Separe por virgula(,)</small>
                            @if ($errors->has('keywords'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('keywords') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="editor">Texto</label>
                            <textarea class="form-control" name="texto" id="editor">
                                @if (old('texto'))
                                    {{ old('texto') }}
                                @else
                                    {{ $n->texto }}
                                @endif
                            </textarea>
                            <small class="form-text text-muted">Texto e subtítulos</small>
                            @if ($errors->has('texto'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('texto') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="imagem">Imagem notícia</label>
                            <input type="file" class="form-control-file" name="imagem" id="imagem" aria-describedby="fileHelpId">
                            <img src="{{ asset('storage/noticia/'.$n->imagem) }}" width="50%" alt="{{ $n->imagem }}">
                            <small class="form-text text-muted">jpeg, npg e gif</small>
                            @if ($errors->has('imagem'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('imagem') }}</strong>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a class="btn btn-outline-success" href="{{ route('noticia.index') }}">Ver notícias cadastradas</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection