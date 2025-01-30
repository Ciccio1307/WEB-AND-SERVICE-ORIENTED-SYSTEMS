<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListBooks</title>
</head>

<body>

    <h1>
        <center>BOOKS DB</center>


    </h1>

    <h2>List of books</h2>


    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Action</th>

        </tr>

        @foreach ($books as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->year }}</td>
                <td>
                    {{ $item->genre->name }}
                </td>
                <td>
                    <form action="/books/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ELIMINA">
                    </form>

                    <form action="/books/{{ $item->id }}/edit" method="get">
                        <input type="submit" value="MODIFICA">
                    </form>

                </td>


            </tr>
        @endforeach

    </table>
</body>


<form action="/books" method="post">
    @csrf

    Name : <input type="text" name="name">
    <br><br><br>
    Author : <input type="text" name="author">
    <br><br><br>

    Year : <input type="text" name="year">
    <br><br><br>

    <select name="genre_id">
        @foreach ($genres as $item2)
            <option value="{{ $item2->id }}"> {{ $item2->name }}</option>
        @endforeach
    </select>

    <input type="submit" name="INVIA">
</form>

</html>
