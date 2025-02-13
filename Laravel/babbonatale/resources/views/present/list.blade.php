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

    <h2>ECCO LA LISTA DEI REGALI</h2>
    <table border="1px">
        <tr>
            <th>Nome del Regalo</th>
            <th>Bambino</th>
            <th>AZIONI</th>
        </tr>

        @foreach ($present as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kid->name }} .
                    {{ $item->kid->good ? 'si è comportato bene' : 'non si è comportato bene' }}</td>
                <td>
                    <form action="/presents/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/presents/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>
                </td>

            </tr>
        @endforeach

    </table>



    <h2>INSERISCI UN NUOVO REGALO</h2>
    <form action="/presents" method="post">
        @csrf
        Nome del Regalo :
        <input type="text" name="name">
        <select name="kid_id">
            @foreach ($kid as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}.{{ $item->good ? 'si è comportato bene' : 'non si è comportato bene' }}</option>
            @endforeach
        </select>
        <input type="submit" value="INVIA">
    </form>
    <br><br><br>
    BAMBINI DB
    <a href="/kids">link</a>
    <br><br><br><br>
    REGALI DB
    <a href="/presents">link</a>
    <br><br><br><br>
    <span>LISTA DEI BAMBINI BUONI
        <a href="/listGoodBoys">link</a>
    </span>
    <br><br><br><br>
    <span>ELIMINA I REGALI DEI RAGAZZI CATTIVI</span>
    <a href="/kids/DeleteBadGuy">link</a>
    <br><br><br><br>
</body>

</html>
