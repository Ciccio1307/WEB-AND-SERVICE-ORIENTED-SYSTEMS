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
        <center>GIFT DB</center>
    </h1>

    <h2>EDIT a gift </h2>
    <form action="/gifts/{{ $gift->id }}" method="post">
        @csrf
        @method('PATCH')
        <span>Name : </span>
        <input type="text" name="name" value = "{{ $gift->name }}">
        <br><br><br>
        <span>Brand : </span>
        <input type="text" name="brand" value = "{{ $gift->brand }}">
        <br><br><br>
        <input type="submit" value="INVIA">
    </form>
</body>

</html>
