<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kid</title>
</head>

<body>
    <h1>
        <center>KID DB</center>
    </h1>

    <h2>MODIFICA IL Bambino</h2>
    <form action="/kids/{{ $kid->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name" value="{{ $kid->name }}">

        <br><br><br>
        Si e' comportato bene?
        <select name="good">

            <option value="1">SI</option>
            <option value="0">NO</option>

        </select>

        <input type="submit" value="INVIA">
    </form>

</body>

</html>
