@extends('layouts.layout')

@section('principal')
	<section class="row justify-content-center">
		<div class="col-12 col-sm-10 my-4">
			<h2>Eventos</h2>
			<p></p>
			<div class="row my-3 grid">
				@foreach ($evento as $e)
					<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-3 grid-item">
						<div class="card">
							<img class="card-img-top" src="{{ asset('storage/evento/'.$e->imagem) }}" alt="">
							<div class="card-body">
								<h2>{{ $e->titulo }}</h2>
								@php
								$text = str_replace('</p>', '', $e->texto);
								$array = explode('<p>', $text);
								@endphp
								<p>{{ $array[1] }}</p>
								{{ date('d-m-Y H:i:s',strtotime($e->created_at)) }}
								<p class="text-center">
									<a class="btn btn-success" href="{{ route('evento.show', [$e->id,str_slug($e->titulo)]) }}">Ver mais</a>
								</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@stop