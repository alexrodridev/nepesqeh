@extends('layouts.layout')

@section('title')
    NepesqEH - Login
@stop

@section('principal')
<section class="container">
    <div class="donors">
        <form class="donors_input" action="{{ route('login') }}" method="POST">
            <h2>{{ __('Login') }}</h2>
            @csrf
            <div class="text-white">
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember">{{ __('Remember Me') }}</label>
            </div>
            <div>
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <input type="submit" value="{{ __('Login') }}">
        </form>
        <div class="donors_image">
            <h2>Entrar com</h2>
            <div class="donors_featured owl-carousel owl-theme">
                <div class="item">
                    <img src="img/donors_featured_one.jpg" alt="">
                    <h3>Facebook</h3>
                </div>
                <div class="item">
                    <img src="img/donors_featured_one.jpg" alt="">
                    <h3>Google</h3>
                </div>
                <div class="item">
                    <img src="img/donors_featured_one.jpg" alt="">
                    <h3>Twitter</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
