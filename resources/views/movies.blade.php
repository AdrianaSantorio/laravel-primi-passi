<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <ul>
        @if (count($movies))
        @foreach($movies as $movie)
        <li>{{$movie['title']}} , {{$movie['year']}}</li>
        @endforeach
        @else
        <p>Nessun film nella lista</p>
        @endif
    </ul>


</body>

</html>