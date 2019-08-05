@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Editar evento</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('evento.update', $e->id) }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group col-12">
                            <label for="evento">Inscrição</label><br>
                            @if ($e->inscrever == 1)
                                <input type="radio" name="inscr" id="true" checked value="1"> <label for="true">Ativas</label><br>
                                <input type="radio" name="inscr" id="false" value="0"> <label for="false">Desativadas</label><br>
                            @else
                                <input type="radio" name="inscr" id="true" value="1"> <label for="true">Ativas</label><br>
                                <input type="radio" name="inscr" id="false" checked value="0"> <label for="false">Desativadas</label><br>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="titulo">Evento</label>
                            @if (old('titulo'))
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $e->titulo }}" value="{{ old('titulo') }}">
                            @else
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="{{ $e->titulo }}" value="{{ $e->titulo }}">    
                            @endif
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('titulo'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="carga_horaria">Carga Horaria</label>
                            @if (old('carga_horaria'))
                                <input type="number" class="form-control" name="carga_horaria" id="carga_horaria" placeholder="{{ $e->carga_horaria }}" value="{{ old('carga_horaria') }}">
                            @else
                                <input type="number" class="form-control" name="carga_horaria" id="carga_horaria" placeholder="{{ $e->carga_horaria }}" value="{{ $e->carga_horaria }}">    
                            @endif
                            <small class="form-text text-muted">Horas em numeros inteiros</small>
                            @if ($errors->has('carga_horaria'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('carga_horaria') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="data">Data</label>
                            @if (old('data'))
                                <input type="date" class="form-control" name="data" id="data" placeholder="{{ $e->data }}" value="{{ old('data') }}">
                            @else
                            <input type="date" class="form-control" name="data" id="data" placeholder="{{ $e->data }}" value="{{ $e->data }}">
                            @endif
                            <small class="form-text text-muted">Data do evento</small>
                            @if ($errors->has('data'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('data') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="editor">Texto</label>
                            <textarea class="form-control" name="texto" id="editor">
                                @if (old('texto'))
                                    {{ old('texto') }}
                                @else
                                    {{ $e->texto }}
                                @endif
                            </textarea>
                            <small class="form-text text-muted">Subítulo e paragrafo</small>
                            @if ($errors->has('texto'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('texto') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="preco">Preço</label>
                            @if (old('preco'))
                                <input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="{{ $e->preco }}" value="{{ old('preco') }}">
                            @else
                                <input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="{{ $e->preco }}" value="{{ $e->preco }}">
                            @endif
                            <small class="form-text text-muted">Numeros reais com duas casas decimais</small>
                            @if ($errors->has('preco'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('preco') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="imagem">Banner do evento</label>
                            <input type="file" class="form-control-file" name="imagem" id="imagem" aria-describedby="fileHelpId">
                            <img src="{{ asset('storage/evento/'.$e->imagem) }}" width="50%" alt="{{ $e->imagem }}">
                            <small class="form-text text-muted">jpeg, npg e gif</small>
                            @if ($errors->has('imagem'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('imagem') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Atualizar evento</button>
                            <button type="reset" class="btn btn-outline-success">Limpar campos</button>
                            <a class="btn btn-outline-success" href="{{ route('evento.index') }}">Ver eventos cadastrado</a>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection