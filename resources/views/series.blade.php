<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>

<body>
    <h1>Serie Tv</h1>
    <ul>
        @forelse($series as $serie)
        <li>{{$serie['title']}} , {{$serie['year']}}</li>
        @empty
        <p>Nessuna serie nella lista</p>
        @endforelse
    </ul>


</body>

</html>