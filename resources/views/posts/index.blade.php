@extends('layout')
@section('titulo', 'Listado de posts')

@section('cuerpo')
<main>
    <h1>Listado de posts</h1>

    @forelse($posts as $post)
        <a href="{{route('posts.show' , ['post' => $post->id])}}">Autor: {{$post->writer->nick}} - {{$post->title}}</a>
    @empty
        No hay posts.
    @endforelse

    <div class="links">
        {{$posts->links()}}
    </div>
</main>

    
@endsection