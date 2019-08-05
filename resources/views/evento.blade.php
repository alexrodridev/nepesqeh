@extends('layouts.layout')

@section('principal')
	<section>
		<h2 class="text-center h1">{{ $evento->titulo }}</h2>
		<div class="container">
			<div class="row justify-content-center">
				@if ($evento->inscrever)
				<div class="col-md-9">
					Carga Horaria: {{ $evento->carga_horaria }}<br>
					Investimento: {{ $evento->preco }}<br>
					Data: {{ date('d-m-Y',strtotime($evento->data)) }}<br>
				</div>
				@endif
				<p class="col-md-9 text-right">
					Postado: {{ date('d-m-Y H:i:s',strtotime($evento->created_at)) }}
					Atualizado: {{ date('d-m-Y H:i:s',strtotime($evento->updated_at)) }}
				</p>
				<div class="col-md-9">
					{!! $evento->texto !!}
				</div>
				<div class="col-md-9">
					<img src="{{ asset('storage/evento/'.$evento->imagem) }}" width="100%" alt="">
				</div>
				<p class="col-md-9 text-right">
					Postado: {{ date('d-m-Y H:i:s',strtotime($evento->created_at)) }}
					Atualizado: {{ date('d-m-Y H:i:s',strtotime($evento->updated_at)) }}
				</p>
				<div class="col-md-9">
					<!-- Your like button code -->
					<div class="fb-like" 
						data-href="http://nepesqueh/{{ $evento->id }}/{{ $evento->titulo }}" 
						data-layout="standard" 
						data-action="like" 
						data-show-faces="true">
					</div>
					<!-- Your share button code -->
					<div class="fb-share-button" 
					data-href="http://nepesqueh/{{ $evento->id }}/{{ $evento->titulo }}" 
					data-layout="button_count">
					</div>
				</div>
			</div>
		</div>
	</section>
@stop