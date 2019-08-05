@extends('layouts.layout')

@section('principal')
	<section class="row justify-content-center">
		<div class="col-12 col-sm-10 my-4">
			<h2>Noticias</h2>
			<p>dsd</p>
			<div class="row my-3 grid">
				@foreach ($noticia as $n)
					<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-3 grid-item">
						<div class="card">
							<img class="card-img-top" src="{{ asset('storage/noticia/'.$n->imagem) }}" alt="">
							<div class="card-body">
								<h3>{{ $n->titulo }}</h3>
								@php
								$text = str_replace('</p>', '', $n->texto);
								$array = explode('<p>', $text);
								@endphp
								<p>{{ $array[1] }}</p>
								<p>{{ $n->created_at }}</p>
								<p class="text-center">
									<a class="btn btn-success" href="{{ route('noticia.show', [$n->id,str_slug($n->titulo)]) }}">Ver mais</a>
								</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@stop