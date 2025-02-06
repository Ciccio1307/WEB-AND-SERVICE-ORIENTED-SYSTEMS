<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIlmDB</title>
</head>

<body>
    <h1>
        <center>FILM DB</center>
    </h1>

    <h2>MODIFICA LA RIGA SCELTA</h2>
    <h2>INSERISCI UN NUOVO FILM NEL DATABASE</h2>
    <form action="/films/{{ $film->id }}" method="post">
        @csrf
        @method('PATCH')
        Titolo : <input type="text" name="title" value="{{ $film->title }}">
        <br><br><br>
        Anno di Uscita : <input type="number" name="year" value="{{ $film->year }}">
        <br><br><br>
        Regista : <input type="text" name="author" value="{{ $film->author }}">
        <br><br><br>
        Genre :
        <select name="genre_id">
            @foreach ($genre as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach

        </select>
        <input type="submit" value="INVIA">

    </form>

</body>

</html>
