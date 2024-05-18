<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laravel project</title>
</head>
<body>
    <h1> hello welcome to the world!</h1>
    @if($name=='Aysha')
        {{$name}}
        {{$id}}
    @else
        {{'This is not Aysha'}}
    @endif
</body>
</html>