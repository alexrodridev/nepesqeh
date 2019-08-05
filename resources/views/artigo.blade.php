@extends('layouts.layout')

@section('principal')
	<section>
		<h2 class="text-center h1">{{ $artigo->titulo }}</h2>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					Palavras Chaves: {{ $artigo->key }}
					<br>
					Autor(es): {{ $artigo->autores }}
				</div>
				<p class="col-md-9 text-right">
					Postado: {{ date('d-m-Y H:i:s',strtotime($artigo->created_at)) }}
					Atualizado: {{ date('d-m-Y H:i:s',strtotime($artigo->updated_at)) }}
				</p>
				<div class="col-md-9">
					{!! $artigo->article !!}
				</div>
			</div>
		</div>
	</section>
@stop