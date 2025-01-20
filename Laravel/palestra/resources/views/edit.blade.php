<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditGYM</title>
</head>
<body>
    <center><h1>Modifiche Campi Palestra</h1></center>
<H2>Campi Palestra </H2>
    <form action="/gyms/{{$gym -> id}}" method="post">
@csrf
@method('PATCH')
Nome :<input type="text" name="name" value="{{$gym ->name}}">
<br><br>
Iscritti Palestra :<input type="number" name="subscriber" value={{$gym -> subscriber}}>
<br><br>
Macchinari in  Palestra :<input type="number" name="machine" value={{$gym ->machine}}>
<br><br>
<input type="submit" value="Modi[fica]">




    </form>
</body>
</html>
