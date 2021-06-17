<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Birdboard</h1>

    <ul>
        @foreach ($projets as $projet )
            <li>{{$project->title}}</li>

        @endforeach
    </ul>

</body>
</html>
