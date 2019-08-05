@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Criar nova noticia</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('noticia.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}" placeholder="Título">
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('titulo'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="keywords">Palavras-chaves</label>
                            <input type="text" class="form-control" name="keywords" id="keywords" value="{{ old('keywords') }}" placeholder="Palavras-chaves">
                            <small class="form-text text-muted">Separe por virgula(,)</small>
                            @if ($errors->has('keywords'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('keywords') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="editor">Texto</label>
                            <textarea class="form-control" name="texto" id="editor">{{ old('texto') }}</textarea>
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
                            <small class="form-text text-muted">jpeg, npg e gif</small>
                            @if ($errors->has('imagem'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('imagem') }}</strong>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="reset" class="btn btn-outline-success">Limpar formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection