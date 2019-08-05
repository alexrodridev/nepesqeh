@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-group">
                <div class="card">
                    <div class="card-header">
                        <h4>Notícias</h4>
                        <nav class="nav">
                            <a class="nav-link btn btn-primary" href="{{ route('noticia.create') }}">Novo</a>
                        </nav>                  
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Titulo</th>
                                    <th>Data</th>
                                    <th colspan="2">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticia as $n)
                                <tr>
                                    <td scope="row"><a href="{{ route('noticia.mostrar', [$n->id, str_slug($n->titulo)]) }}">{{ $n->titulo }}</a></td>
                                    <td>{{ date('d-m-Y H:i:s',strtotime($n->created_at)) }}</td>
                                    <td>
                                        <a class="nav-link btn btn-primary" href="{{ route('noticia.edit', $n->id) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('noticia.destroy', $n->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="nav-link btn btn-danger" type="submit">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $noticia->links() }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Eventos</h4>
                        <nav class="nav">
                            <a class="nav-link btn btn-primary" href="{{ route('evento.create') }}">Novo</a>
                        </nav>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Titulo</th>
                                    <th>Data</th>
                                    <th colspan="2">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($evento as $e)
                                <tr>
                                    <td scope="row"><a href="{{ route('evento.mostrar', [$e->id, str_slug($e->titulo)]) }}">{{ $e->titulo }}</a></td>
                                    <td>{{ date('d-m-Y',strtotime($e->data)) }}</td>
                                    <td>
                                        <a class="nav-link btn btn-primary" href="{{ route('evento.edit', $e->id) }}">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('evento.destroy', $e->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="nav-link btn btn-danger" type="submit">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-header">
                        <h4>Notícias</h4>
                        <nav class="nav">
                          <a class="nav-link btn btn-primary" href="#">Novo</a>
                        </nav>                  
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Titulo</th>
                                    <th>Data</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticia as $n)
                                <tr>
                                    <td scope="row"><a href="{{ route('noticia.mostrar', [$n->id, str_slug($n->titulo)]) }}">{{ $n->titulo }}</a></td>
                                    <td>{{ date('d-m-Y H:i:s',strtotime($n->created_at)) }}</td>
                                    <td>
                                        <a class="nav-link btn btn-primary" href="#">Editar</a>
                                        <a class="nav-link btn btn-danger" href="#">Deletar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $noticia->links() }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Eventos</h4>
                        <nav class="nav">
                            <a class="nav-link btn btn-primary" href="#">Novo</a>
                        </nav>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Titulo</th>
                                    <th>Data</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticia as $n)
                                <tr>
                                    <td scope="row"><a href="{{ route('noticia.mostrar', [$n->id, str_slug($n->titulo)]) }}">{{ $n->titulo }}</a></td>
                                    <td>{{ date('d-m-Y H:i:s',strtotime($n->created_at)) }}</td>
                                    <td>
                                        <a class="nav-link btn btn-primary" href="#">Editar</a>
                                        <a class="nav-link btn btn-danger" href="#">Deletar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
