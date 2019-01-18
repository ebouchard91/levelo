@extends('layouts.app')

@section('content')

<h1>{{ __('Reset Password') }}</h1>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
    @if ($errors->has('email'))
        <span>{{ $errors->first('email') }}</span>
    @endif
    <br>

    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
        <span>{{ $errors->first('password') }}</span>
    @endif
    <br>

    <label for="password-confirm">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" name="password_confirmation" required>
    <br>
                                
    <button type="submit">{{ __('Reset Password') }}</button>
</form>

@endsection
