@extends('layouts.main')

@section('container')
<div class="container text-center">
    <h1>Hello!</h1>
    <img src="images/{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle mb-2">
    <h3>I'm {{ $name }}</h3>
    <small>{{ $desc }}</small>
</div>
@endsection