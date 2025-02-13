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
        <center>LOANS DB</center>
    </h1>

    <h2>ECCO LA LISTA DEI PRESTITI INSERITI NEL DATABASE</h2>
    <table border="10px">
        <tr>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>INIZIO PRESTITO</th>
            <th>FINE PRESTITO</th>
            <th>RITORNATO ?</th>
            <th>LIBRO</th>
            <th>AZIONI</th>
        </tr>
        @foreach ($loan as $item)
            <tr>
                <td>{{ $item->user_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->loan_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->returned ? 'SI' : 'NO' }}</td>
                <td>{{ $item->book->title }}</td>
                <td>
                    <form action="/loans/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>
                    <form action="/loans/{{ $item->id }}/edit" method="get">

                        <input type="submit" value="MODIFICA">
                    </form>

                    <form action="/loans/filterById/{{ $item->book->id }}" method="get">
                        <input type="submit" value="FILTRA">
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
    <h2>INSERISCI UN NUOVO PRESTITO</h2>
    <form action="/loans" method="post">
        @csrf
        <span>USERNAME</span>
        <input type="text" name="user_name">
        <br><br><br>
        <span>EMAIL</span>
        <input type="email" name="email">
        <br><br><br>
        <span>INIZIO PRESTITO</span>
        <input type="date" name="loan_date">
        <br><br><br>
        <span>FINE PRESTITO</span>
        <input type="date" name="return_date">
        <br><br><br>
        <span>E' STATO TORNATO ???</span>
        <select name="returned">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select> <br><br><br>
        <span>LIBRO </span>
        <select name="book_id">
            <tr>
                @foreach ($book as $item)
                    <option value="{{ $item->id }}"> {{ $item->title }}</option>
                @endforeach
            </tr>
        </select>
        <input type="submit" value="INVIA">
    </form>


    <h2>FILTRA PER LIBRO</h2>
    <form action="/loans/filterById" method="post">
        @csrf
        <span>LIBRO </span>
        <select name="book_id">
            <tr>
                @foreach ($book as $item)
                    <option value="{{ $item->id }}"> {{ $item->title }}</option>
                @endforeach
            </tr>
        </select>
        <input type="submit" value="FILTRA">

    </form>
</body>

</html>
