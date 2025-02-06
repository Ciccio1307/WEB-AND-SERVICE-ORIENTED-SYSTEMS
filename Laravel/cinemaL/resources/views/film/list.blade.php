<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FilmDB</title>
</head>

<body>
    <h1>
        <center>FILM DB</center>
    </h1>


    <h2>Ecco la lista inseriti nel database</h2>
    <table border="2px">
        <tr>
            <th>Titolo</th>
            <th>Regista</th>
            <th>Anno di Uscita</th>
            <th>Genere</th>
            <th>Action</th>
        </tr>
        @foreach ($film as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->genre->name }}</td>
                <td>
                    <form action="/films/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/films/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <br><br><br>

    <h2>INSERISCI UN NUOVO FILM NEL DATABASE</h2>
    <form action="/films" method="post">
        @csrf
        Titolo : <input type="text" name="title">
        <br><br><br>
        Anno di Uscita : <input type="number" name="year">
        <br><br><br>
        Regista : <input type="text" name="author">
        <br><br><br>
        Genre :
        <select name="genre_id">
            @foreach ($genre as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach

        </select>
        <input type="submit" value="INVIA">

    </form>
    <br><br><br>
    <span>Posticipa tutti i film del database di un anno </span>
    <a href="/films/postYear">clicca</a>
    <br><br><br><br>

    <h2>Visualizza i film per genere</h2>
    <form action="/films/filterByGenre" method="post">
        @csrf
        <select name="genre_id">


            @foreach ($genre as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="SCEGLI">


    </form>



    <br><br><br><br>
    Genre : <a href="/genres"> link</a>

    <br><br><br>

    Film : <a href="/films"> link</a>

</body>

</html>
