@extends('layout')
@section('titulo', 'Ofertas de empresa')

@section('cuerpo')
<main>
    <h1>Ofertas sobre {{$ofertasEmpresa[0]->company}}</h1>
    <div>
        <ul>
    @forelse($ofertasEmpresa as $oferta)
        @php($precioDescontado = ($oferta->price - (($oferta->discount / 100) * $oferta->price)))
        <li>
            <a href="/sales/{{$oferta->id}}">{{$oferta->company}} | {{$oferta->name}} | {{$oferta->price}} € - Oferta: {{$oferta->discount}}% -> {{$precioDescontado}}€ hasta {{$oferta->expires}}</a>
        </li>
    @empty 
        <h3>No se han encontrado ofertas.</h3>
    @endforelse
        </ul>
    </div>
</main>
@endsection
