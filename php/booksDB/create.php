<?php 

require_once "connection.php";

$isbn = $_POST["isbn"];
$title = $_POST["title"];
$authore = $_POST["author"];
$publisher = $_POST["publisher"];
$ranking = $_POST["ranking"];
$year = $_POST["year"];
$price = $_POST["price"];


$sql = "INSERT INTO books (isbn,title,author,publisher,ranking,year,price) VALUES ('$isbn' , '$title', '$authore' , '$publisher' , '$ranking' , '$year' , '$price' )";

$result = $connection ->query($sql);
header("location:read.php ");

?>