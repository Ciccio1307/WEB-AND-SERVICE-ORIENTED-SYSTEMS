<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditExam</title>
</head>

<body>

    <form action="/exams/{{ $exam->id }}" method="post">
        @csrf
        @method('PATCH')
        Nome ESAME :
        <input type="text" name="name" value="{{ $exam->name }}" required>
        <br> <br>
        CFU :
        <input type="text" name="cfu" value="{{ $exam->cfu }}"required>
        <br> <br>
        VOTO :
        <input type="text" name="mark" value="{{ $exam->mark }}"required>
        <input type="submit" value="Modifica">
    </form>

</body>

</html>
