@extends('layouts.app')

@section('content')

<h1>Edit</h1>

@if (session('status'))
    <p>{{ session('status') }}</p>
@endif

@endsection
