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
        <center>PRESENTS DB</center>
    </h1>

    <h2>MODIFICA REGALO</h2>
    <form action="/presents/{{ $present->id }}" method="post">
        @csrf
        @method('PATCH')
        Nome del Regalo :
        <input type="text" name="name" value="{{ $present->name }}">
        <select name="kid_id">
            @foreach ($kid as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="INVIA">
    </form>

</body>

</html>
