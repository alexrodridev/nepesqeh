@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="card-header">
                    <h4>Criar novo evento</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('evento.store') }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-12">
                            <label for="evento">Inscrição</label><br>
                            <input type="radio" name="inscr" id="true" checked value="1"> <label for="true">Ativas</label><br>
                            <input type="radio" name="inscr" id="false" value="0"> <label for="false">Desativadas</label><br>
                        </div>
                        <div class="form-group col-12">
                            <label for="evento">Evento</label>
                            <input type="text" class="form-control" name="evento" id="evento" value="{{ old('evento') }}">
                            <small class="form-text text-muted">O título faz toda a diferença</small>
                            @if ($errors->has('evento'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('evento') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="carga_horaria">Carga Horaria</label>
                            <input type="number" class="form-control" name="carga_horaria" id="carga_horaria" value="{{ old('carga_horaria') }}">
                            <small class="form-text text-muted">Horas em numeros inteiros</small>
                            @if ($errors->has('carga_horaria'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('carga_horaria') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="data">Data</label>
                            <input type="date" class="form-control" name="data" id="data" value="{{ old('data') }}">
                            <small class="form-text text-muted">Data do evento</small>
                            @if ($errors->has('data'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('data') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="preco">Preço</label>
                            <input type="number" step="0.01" class="form-control" name="preco" id="preco" value="{{ old('preco') }}">
                            <small class="form-text text-muted">Numeros reais com duas casas decimais</small>
                            @if ($errors->has('preco'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('preco') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="editor">Texto</label>
                            <textarea class="form-control" name="texto" id="editor">{{ old('texto') }}</textarea>
                            <small class="form-text text-muted">Subítulo e paragrafo</small>
                            @if ($errors->has('texto'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('texto') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="imagem">Banner do evento</label>
                            <input type="file" class="form-control-file" name="imagem" id="imagem" aria-describedby="fileHelpId">
                            <small class="form-text text-muted">jpeg, npg e gif</small>
                            @if ($errors->has('imagem'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('imagem') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-success">Salvar evento</button>
                            <a class="btn btn-outline-success" href="{{ route('evento.index') }}" role="button">Ver eventos cadastrados</a>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection