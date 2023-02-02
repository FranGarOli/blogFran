@extends('layout')
@section('titulo', 'Ficha post')

@section('cuerpo')
<main>
    <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->content}}</p>
        <br>
        <p>{{$post->created_at}} - Autor: {{$post->writer->nick}}</p>
    </div>
    <br>

    <div class="acciones">
        <h3><a href="{{route('posts.edit', ['post' => $post->id]) }}">Editar post </a></h3>
        <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Borrar post">
        </form>
    </div>
</main>
@endsection