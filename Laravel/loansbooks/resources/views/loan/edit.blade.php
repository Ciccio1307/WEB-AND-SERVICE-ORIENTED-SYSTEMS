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

    <h2>MODIFICA PRESTITO</h2>
    <form action="/loans/{{ $loan->id }}" method="post">
        @csrf
        @method('PATCH')
        <span>USERNAME</span>
        <input type="text" name="user_name" value ="{{ $loan->user_name }}">
        <br><br><br>
        <span>EMAIL</span>
        <input type="email" name="email" value ="{{ $loan->email }}">
        <br><br><br>
        <span>INIZIO PRESTITO</span>
        <input type="date" name="loan_date" value ="{{ $loan->loan_date }}">
        <br><br><br>
        <span>FINE PRESTITO</span>
        <input type="date" name="return_date" value ="{{ $loan->return_date }}">
        <br><br><br>
        <span>LIBRO </span>
        <select name="book_id">
            <tr>
                @foreach ($book as $item)
                    <option value="{{ $item->id }}"> {{ $item->title }}</option>
                @endforeach
            </tr>
        </select>
        <br><br><br>
        <span>E' STATO TORNATO ???</span>
        <select name="returned">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select> <br><br><br>
        <input type="submit" value="INVIA">
    </form>

</body>

</html>
