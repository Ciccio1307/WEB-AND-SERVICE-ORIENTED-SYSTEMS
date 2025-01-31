<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditTours</title>
</head>

<body>
    <h2>MODIFICA IL TOUR SELEZIONATO</h2>
    <form action="/tours/{{ $tour->id }}" method="post">
        @csrf
        @method('PATCH')
        Name : <input type="text" name="name"value="{{ $tour->name }}">
        <br><br><br>
        Citta :
        <select name="place_id">
            @foreach ($place as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>


        <br><br><br>
        Prezzo : <input type="number" name="price" value="{{ $tour->price }}">
        <br><br><br>
        <input type="submit" value="MODIFICA">
    </form>

    <br><br><br><br><br><br>
    CITTA <a href="/places">link</a>
    <br><br><br>

    DESTINAZIONI <a href="/tours">link</a>
</body>

</html>
