@extends('layout')
@section('titulo', 'Listado de ofertas')

@section('cuerpo')
<main>
    <h1>Listado de ofertas</h1>

    @forelse($sales as $sale)
        @php($precioDescontado = ($sale->price - (($sale->discount / 100) * $sale->price)))
        <a href="sales/{{$sale->id}}">{{$sale->company}} | {{$sale->name}} | {{$sale->price}} € - Oferta: {{$sale->discount}}% -> {{$precioDescontado}}€ hasta {{$sale->expires}}</a>
    @empty
        No hay ofertas.
    @endforelse

    <div class="links">
        {{$sales->links()}}
    </div>
</main>

    
@endsection