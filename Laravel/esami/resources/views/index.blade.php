<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IndexExams</title>
</head>

<body>

    <h1>
        <center>EXAM DB</center>
    </h1>

    <h2>LISTA DI ESAMI</h2>
    <table border="1px">
        <tr>
            <th>ESAME</th>
            <th>NOME ESAME</th>
            <th>CFU ESAME</th>
            <th>VOTO ESAME</th>
            <th>AZIONI</th>
        </tr>

        @foreach ($exam as $val)
            <tr>
                <td>{{ $val->id }}</td>
                <td>{{ $val->name }}</td>
                <td>{{ $val->cfu }}</td>
                <td>{{ $val->mark }}</td>
                <td>
                    <form action="exams/{{ $val->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>
                    <form action="/exams/{{ $val->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    <br><br><br>
    <h2>AGGIUNGI UN NUOVO ESAME</h2>

    <form action="/exams" method="post">
        @csrf
        Nome materia : <input type="text" name="name" required>
        <br><br>
        CFU : <input type="number" name="cfu" required>
        <br><br>
        VOTO: <input type="number" name="mark" required>
        <br><br>
        <input type="submit" value="Invia">

    </form>
</body>

</html>
