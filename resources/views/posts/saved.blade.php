@extends('layout')
@section('titulo', 'Post creado')

@section('cuerpo')
<main>
    <h1>Post "{{$post->title}}" creado con éxito.</h1>
</main>
@endsection