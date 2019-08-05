@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Artigo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('artigo.update', $a->id) }}" class="row" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group col-12">
                            <label for="titulo">Titulo</label>
                            @if (old('titulo'))
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $a->titulo }}" value="{{ old('titulo') }}">
                            @else
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $a->titulo }}" value="{{ $a->titulo }}">    
                            @endif
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('titulo'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="palavra_chave">Palavra Chave</label>
                            @if (old('palavra_chave'))
                                <input type="text" class="form-control" name="palavra_chave" id="palavra_chave" placeholder="{{ $a->key }}" value="{{ old('palavra_chave') }}">
                            @else
                                <input type="text" class="form-control" name="palavra_chave" id="palavra_chave" placeholder="{{ $a->key }}" value="{{ $a->key }}">    
                            @endif
                            <small class="form-text text-muted">Separar palavras por vigula</small>
                            @if ($errors->has('palavra_chave'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('palavra_chave') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="autor">Autor(es)</label>
                            @if (old('autor'))
                                <input type="text" class="form-control" name="autor" id="autor" placeholder="{{ $a->autores }}" value="{{ old('autor') }}">
                            @else
                                <input type="text" class="form-control" name="autor" id="autor" placeholder="{{ $a->autores }}" value="{{ $a->autores }}">    
                            @endif
                            <small class="form-text text-muted">Separar palavras por ponto e vigula</small>
                            @if ($errors->has('autor'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('autor') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="editor">Texto</label>
                            <textarea class="form-control" name="artigo" id="editor">
                                @if (old('artigo'))
                                    {{ old('artigo') }}
                                @else
                                    {{ $a->article }}
                                @endif
                            </textarea>
                            <small class="form-text text-muted">Cole o texto aqui em cima</small>
                            @if ($errors->has('artigo'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('artigo') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Atualizar artigo</button>
                            <a class="btn btn-outline-success" href="{{ route('artigo.index') }}">Ver eventos cadastrado</a>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection