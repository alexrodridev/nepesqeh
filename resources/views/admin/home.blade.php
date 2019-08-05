@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 my-3">
        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    <h4>Home</h4>                 
                </div>
                <div class="card-body">
                    @if (session('msg_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Alerta:</strong> {{ session('msg_success') }}
                        </div>
                    @else
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Tudo correto!
                        </div>
                    @endif
                    <div>
                        Noticias
                        Eventos
                        Artigos
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection