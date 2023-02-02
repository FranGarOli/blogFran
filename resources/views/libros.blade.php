<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background : beige;
        }
        .contenedor{
            display : flex; 
            margin : 2em auto;
            justify-content : space-around;
        }

        .libro{
            padding : 1em; 
            border : 1px solid black;
            background : white;
            margin-right : 1em;
            text-align : center;
        }
    </style>
</head>
<body>

    <div class="contenedor">
    @forelse ($libros as $libro)
        <div class="libro">
            <h2>{{$libro['titulo']}}</h2>
            <p>{{$libro['autor']}} - {{$libro['anyo']}}</p>
        </div>
    @empty
        <p>No hay más libros.</p>
    @endforelse
    </div>

    <!-- @each('partials.fichalibro', $libros, 'libro') -->

</body>
</html>