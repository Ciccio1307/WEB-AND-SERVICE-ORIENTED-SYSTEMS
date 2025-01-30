<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditGenre</title>
</head>

<body>

    <h2>INSERT A NEW GENRE</h2>
    <form action="/genres/{{ $genre->id }}" method="post">
        @csrf
        @method('PATCH')
        Name :
        <input type="text" name="name" value="{{ $genre->name }}">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>
</body>

</html>
