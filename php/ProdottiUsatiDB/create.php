<?php
require_once "connection.php";
$prodotto = $_POST["prodotto"];
$prezzo = $_POST["prezzo"];
$data = $_POST["data"];


$sql = "INSERT INTO Vendite (prodotto,prezzo,data_vendita) VALUES ('$prodotto' , '$prezzo' , '$data')";

$result = $connection ->query($sql);
header("location:read.php");

?>