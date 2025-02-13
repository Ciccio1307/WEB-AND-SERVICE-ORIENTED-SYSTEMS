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

    <table border="1px">
        <tr>
            <th>Nome</th>
            <th>E' stato buono ? </th>
            <th>AZIONI</th>
        </tr>
        @foreach ($kid as $item)
            <tr>
                <td> {{ $item->name }}</td>
                <td> {{ $item->good ? 'si' : 'no' }}</td>
                <td>
                    <form action="/kids/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/kids/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    <h2>Inserisci un nuovo Bambino</h2>
    <form action="/kids" method="post">
        @csrf
        Name : <input type="text" name="name">

        <br><br><br>
        Si e' comportato bene?
        <select name="good">

            <option value="1">SI</option>
            <option value="0">NO</option>

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
    TUTTI I RAGAZZI SONO BUONI
    <a href="/kids/allBoysAreGood">link</a>
    <br><br><br><br>
    TUTTI I RAGAZZI SONO CATTIVI
    <a href="/kids/allBoysAreBad">link</a>
    <br><br><br><br>
</body>

</html>
