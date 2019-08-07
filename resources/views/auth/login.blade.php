@extends('layouts.layout')

@section('title')
    NepesqEH - Login
@stop

@section('principal')
<section class="row justify-content-center">
    <div class="card col-12 col-sm-5 my-4">
        <form class="card-body" action="{{ route('login') }}" method="POST">
            <h2 class="text-center m-3">Entrar</h2>
            @csrf
            <div>
                <label for="email" class="">E-mail</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <label for="password" class="">Senha</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember">Lembrar de mim</label>
            </div>
            <input type="submit" class="btn btn-success" value="{{ __('Login') }}">
        </form>
    </div>
</section>
@endsection
