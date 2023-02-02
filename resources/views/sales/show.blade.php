@extends('layout')
@section('titulo', 'Ficha oferta')

@section('cuerpo')
<main>
    <h1>Oferta {{$sale->first()->name}}</h1>
    <br>
    <!-- <h3><a href="/sale/{{$id}}/editar">Editar post </a></h3> -->
</main>
@endsection