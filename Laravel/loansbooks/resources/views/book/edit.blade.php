<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        <center>BOOKS DB</center>
    </h1>


    <h2>MODIFICA UN LIBRO NEL DATABASE</h2>
    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PATCH')
        <span>Titolo</span>
        <input type="text" name="title" value="{{ $book->title }}">
        <br><br><br>
        <span>Autore</span>
        <input type="text" name="author" value="{{ $book->author }}">
        <br><br><br>
        <span>Genre</span>
        <input type="text" name="genre" value="{{ $book->genre }}">
        <br><br><br>
        <span>COpie DISPONIBILI</span>
        <input type="number" name="copies" value="{{ $book->copies }}">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>

</body>

</html>
