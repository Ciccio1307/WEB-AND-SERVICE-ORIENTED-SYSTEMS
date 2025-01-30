<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditRestaurant</title>
</head>

<body>

    <h1>
        <center>RESTAURANTS DB</center>
    </h1>

    <h2>Modify restaurant</h2>

    <form action="/restaurants/{{ $restaurant->id }}" method="post">
        @csrf
        @method('PATCH')
        <span>Modifica nome ristorante</span>
        <input type="text" name="name" value="{{ $restaurant->name }}">
        <span>Modifica anno di fondazione</span>
        <input type="number" name="foundation" value="{{ $restaurant->foundation }}">
        <span>Modifica numero stelle</span>
        <input type="number" name="star" value="{{ $restaurant->star }}">
        <span>Inserisci chef</span>
        <select name="chef_id">
            @foreach ($chefs as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Invia">

    </form>

</body>

</html>
