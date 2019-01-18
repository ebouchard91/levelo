@extends('layouts.app')

@section('content')

<h1>{{ __('Reset Password') }}</h1>

@if (session('status'))
    <p>{{ session('status') }}</p>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    @if ($errors->has('email'))
        <span>{{ $errors->first('email') }}</span>
    @endif
    <br>

    <button type="submit">{{ __('Send Password Reset Link') }}</button>
</form>

@endsection
