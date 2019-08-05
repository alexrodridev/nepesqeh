@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Cadastrar novo artigo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('artigo.store') }}" class="row" method="POST">
                        @csrf
                        <div class="form-group col-12">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}" placeholder="Título">
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('titulo'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="palavra_chave">Palavra Chave</label>
                            <input type="text" class="form-control" name="palavra_chave" id="palavra_chave" value="{{ old('palavra_chave') }}" placeholder="Palavra Chave">
                            <small class="form-text text-muted">Separar palavras por vigula</small>
                            @if ($errors->has('palavra_chave'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('palavra_chave') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="autor">Autor(es)</label>
                            <input type="text" class="form-control" name="autor" id="autor" value="{{ old('autor') }}" placeholder="Autor">
                            <small class="form-text text-muted">Separar palavras por ponto e vigula</small>
                            @if ($errors->has('autor'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('autor') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="editor">Artigo</label>
                            <textarea class="form-control" name="artigo" id="editor">{{ old('artigo') }}</textarea>
                            <small class="form-text text-muted">Cole o texto aqui em cima</small>
                            @if ($errors->has('artigo'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('artigo') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Salvar artigo</button>
                            <a class="btn btn-outline-success" href="{{ route('artigo.index') }}" role="button">Ver artigos cadastrados</a>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection