<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>MODIFICA LA LISTA DEI LIBRI</h1>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name" value="{{ $book->name }}">
        <br><br><br>
        Author : <input type="text" name="author" value="{{ $book->author }}">
        <br><br><br>

        Year : <input type="text" name="year" value="{{ $book->year }}">
        <br><br><br>

        <select name="genre_id">
            @foreach ($genres as $item2)
                <option value="{{ $item2->id }}"> {{ $item2->name }}</option>
            @endforeach
        </select>

        <input type="submit" name="INVIA">
    </form>
</body>

</html>
