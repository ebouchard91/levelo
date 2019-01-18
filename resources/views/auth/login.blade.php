@extends('layouts.app')

@section('content')

<h1>{{ __('Login') }}</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    @if ($errors->has('email'))
        <span>{{ $errors->first('email') }}</span>
    @endif
    <br>

    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
        <span>{{ $errors->first('password') }}</span>
    @endif
    <br>
                                    
    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label for="remember">{{ __('Remember Me') }}</label>

    <button type="submit">{{ __('Login') }}</button>

    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    @endif
</form>

@endsection

