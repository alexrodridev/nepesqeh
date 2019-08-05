@extends('layouts.app')

@section('content')
<h4 class="text">Artigos cadastrados</h4>
<div class="row my-3 grid">
  @foreach ($artigo as $a)
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-3 my-3 grid-item">
      <div class="card">
        <div class="card-body">
          @php
          $text = str_replace('</p>', '', $a->article);
          $array = explode('<p>', $text);
          @endphp
          <p>{{ $array[1] }}</p>
          <a class="btn btn-success" href="{{ route('artigo.edit', $a->id) }}">Editar</a>
          <a class="btn btn-outline-success" href="{{ route('artigo.destroy', $a->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form{{ $a->id }}').submit();">Deletar</a>
          <form id="delete-form{{ $a->id }}" action="{{ route('artigo.destroy', $a->id) }}" method="post">
            @csrf
            @method('delete')
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection