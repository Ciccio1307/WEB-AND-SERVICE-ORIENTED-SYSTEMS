<?php


require_once "connection.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){

    $id = $_GET["id"];

$sql = "SELECT *  FROM books WHERE id=".$id;

$result = $connection ->query($sql);
while ($row = $result ->fetch_assoc())

{
    print "<form action='update.php' method='post'>";
    print "ISBN : <input type ='hidden' value = '".$row["id"]."' name = 'id' ><br>";
    print "ISBN : <input type ='text' value = '".$row["isbn"]."' name = 'isbn' ><br>";
    print "TITOLO : <input type ='text' value = '".$row["title"]."' name = 'title' ><br>";
    print "AUTHORE : <input type ='text' value = '".$row["author"]."' name = 'author' ><br>";
    print "PUBLISHER : <input type ='text' value = '".$row["publisher"]."' name = 'publisher' ><br>";
    print "RANKING : <input type ='number' value = '".$row["ranking"]."' name = 'ranking' ><br>";
    print "YEAR : <input type ='number' value = '".$row["year"]."' name = 'year' ><br>";
    print "PRICE : <input type ='number' value = '".$row["price"]."' name = 'price' ><br>";
    print "<input type ='submit' value='Update' >";

    print"<br> <br>  <br>  ";
print "-------------------------------------------------------------------------------";
    print "</form>";

}
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $isbn = $_POST["isbn"];
    $title = $_POST["title"];
    $authore = $_POST["author"];
    $publisher = $_POST["publisher"];
    $ranking = $_POST["ranking"];
    $year = $_POST["year"];
    $price = $_POST["price"];
    $sql = "UPDATE books SET isbn = '$isbn' , title = '$title' , author= '$authore' , publisher='$publisher' , ranking='$ranking' , year='$year' , price='$price'  WHERE id=".$id;
    $result = $connection ->query($sql);
    header("location:read.php ");
    }

