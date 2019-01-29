@extends('layouts.app')

@section('content')

<h1>Index</h1>

@if (session('status'))
    <p>{{ session('status') }}</p>
@endif

@foreach ($builds as $build)
    <p>This is user {{ $build->id }}</p>
@endforeach

@endsection
