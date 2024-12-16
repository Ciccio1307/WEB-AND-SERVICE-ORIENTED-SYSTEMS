<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamBiblioteca</title>
</head>
<body>

<h1><center>ESAMI BIBLIOTECA   </center> </h1>
<h2>LISTA LIBRI</h2>
<a href="update1990.php">EFFETTUA ADEGUAMENTO PREZZO - 1990</a>
<br>
<br>
    <?php

require_once "connection.php";
$sql = "SELECT * FROM books";
$result = $connection->query(($sql));
while ($row = $result ->fetch_assoc())

{

    print "<form action='read.php' method='post'>";
    print "ISBN : ".$row["isbn"]."<br>";
    print "Title : ".$row["title"]."<br>";
    print "Author : ".$row["author"]."<br>";
    print "Publisher : ".$row["publisher"]."<br>";
    print "Ranking : ".$row["ranking"]."<br>";
    print "Year : ".$row["year"]."<br>";
    print "Price : ".$row["price"]."<br>";
    print "<a href = 'delete.php?id=".$row["id"]."' > Elimina </a>";
    print "<a href = 'update.php?id=".$row["id"]."' > Modifica </a>";
    print"<br> <br>  <br>  ";
print "-------------------------------------------------------------------------------";
    print "</form>";

    
}
PRINT "<BR> <BR>";
PRINT "<h2>INSERISCI UN NUOVO LIBRO</h2>";
PRINT "<BR> <BR>";

print "<form action = 'create.php' method='post'>";
print "ISBN = <input type = 'text' name= 'isbn'  >";
print "TITLE = <input type = 'text' name= 'title'  >";
print "AUTHOR = <input type = 'text' name= 'author'  >";
print "PUBLISHER = <input type = 'text' name= 'publisher'  >";
print "RANKING = <input type = 'number' name= 'ranking'  >";
print "Year = <input type = 'number' name= 'year'  >";
print "Price = <input type = 'number' name= 'price'  >";
print "<input type ='submit' value='Invia' >";
print "</form>";




?>
</body>
</html>