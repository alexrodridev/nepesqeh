@extends('layouts.app')

@section('content')
<h4 class="text">Noticias cadastradas</h4>
<div class="row my-3 grid">
  @foreach ($noticia as $n)
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-3 my-3 grid-item">
      <div class="card">
        <img class="card-img-top" src="{{ asset('storage/noticia/'.$n->imagem) }}" alt="">
        <div class="card-body">
          <h4>{{ $n->titulo }}</h4>
          @php
          $text = str_replace('</p>', '', $n->texto);
          $array = explode('<p>', $text);
          @endphp
          <p>{{ $array[1] }}</p>
          <a class="btn btn-success" href="{{ route('noticia.edit', $n->id) }}">Editar</a>
          <a class="btn btn-outline-success" href="{{ route('noticia.destroy', $n->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $n->id }}').submit();">Deletar</a>
          <form id="delete-form{{ $n->id }}" action="{{ route('noticia.destroy', $n->id) }}" method="post">
            @csrf
            @method('delete')
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection