@extends('layouts.layout')

@section('principal')
	<section>
		<h2 class="text-center h1">{{ $noticia->titulo }}</h2>
		<div class="row justify-content-center">
			<p class="col-md-9 text-right">
				Postado: {{ date('d-m-Y H:i:s',strtotime($noticia->created_at)) }}
				Atualizado: {{ date('d-m-Y H:i:s',strtotime($noticia->updated_at)) }}
			</p>
			<div class="col-md-9">
				{!! $noticia->texto !!}
			</div>
			<div class="col-md-9">
				<img width="100%" src="{{ asset('storage/noticia/'.$noticia->imagem) }}" alt="">
			</div>
			<p class="col-md-9 text-right">
				Postado: {{ date('d-m-Y H:i:s',strtotime($noticia->created_at)) }}
				Atualizado: {{ date('d-m-Y H:i:s',strtotime($noticia->updated_at)) }}
			</p>
		</div>
	</section>
@stop