@extends('layout')
@section('titulo', 'Autor '.$writer->nick)

@section('cuerpo')
<main>
    <h1>{{$writer->nick}} - {{$writer->email}}</h1>

    <div class="contenido">
        @forelse($writer->posts as $post)

            @if($post->visible == 1)
                <a href="{{route('posts.show' , ['post' => $post->id])}}">{{$post->title}}</a>
            @else
                <p>{{$post->title}} - NO ESTÁ VISIBLE</p>
            @endif
            
            @empty
            No hay posts del autor {{$writer->nick}}.

        @endforelse
    </div>

</main>
@endsection