@extends('layouts.app')

@section('content')
<h4 class="text">Eventos cadastrados</h4>
<div class="row my-3 grid">
  @foreach ($evento as $e)
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-3 my-3 grid-item">
      <div class="card">
        <img class="card-img-top" src="{{ asset('storage/evento/'.$e->imagem) }}" alt="">
        <div class="card-body">
          <h4>{{ $e->titulo }}</h4>
          @php
          $text = str_replace('</p>', '', $e->texto);
          $array = explode('<p>', $text);
          @endphp
          <p>{{ $array[1] }}</p>
          <a class="btn btn-success" href="{{ route('evento.edit', $e->id) }}">Editar</a>
          <a class="btn btn-outline-success" href="{{ route('evento.destroy', $e->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $e->id }}').submit();">Deletar</a>
          <form id="delete-form{{ $e->id }}" action="{{ route('evento.destroy', $e->id) }}" method="post">
            @csrf
            @method('delete')
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection