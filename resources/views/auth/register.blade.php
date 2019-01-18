@extends('layouts.app')

@section('content')

<h1>{{ __('Register') }}</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">{{ __('Name') }}</label>
    <input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    @if ($errors->has('name'))
        <span>{{ $errors->first('name') }}</span>
    @endif
    <br>
    
    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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

    <button type="submit">{{ __('Register') }}</button>
</form>

@endsection

