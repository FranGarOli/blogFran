@extends('layout')
@section('titulo', 'Listado de autores')

@section('cuerpo')
<main>
    <h1>Autores</h1><hr>

    <div class="contenido">
        @forelse($writers as $writer)
            <a href="{{route('writers.show' , ['writer' => $writer->id])}}">{{$writer->nick}} - {{$writer->email}}</a>
        @empty
            No hay autores.
        @endforelse
    </div>
    

    <div class="links">
        {{$writers->links()}}
    </div>
</main>

    
@endsection