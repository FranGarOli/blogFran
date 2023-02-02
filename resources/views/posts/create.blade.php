@extends('layout')
@section('titulo', 'Crear un post')

@section('cuerpo')
<main>
    <h1>Crear un nuevo post</h1><hr>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <label for="title">Título: </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">Contenido: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">
        <br>
        <label for="writer">Autor: </label>
        <select name="writer" id="writer">
            @foreach ($autores as $autor)
                <option value="{{$autor->id}}">{{$autor->nick}}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
</main>

@endsection