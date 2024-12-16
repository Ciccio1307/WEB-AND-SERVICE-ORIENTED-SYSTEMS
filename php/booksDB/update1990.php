<?php


require_once "connection.php";

$sql = "UPDATE books SET   price=price-price*0.10  WHERE year < =1990";
$result = $connection ->query($sql);
header("location:read.php ");



?>