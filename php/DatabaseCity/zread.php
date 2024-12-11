<?php
print "<h1><center>DATABASE CITTA' VACANZE</center></h1>";

print "<h2> LISTA CITTA' </h2>";

require_once "zconnection.php";

$sql = "SELECT * FROM Citta ";


$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) {




 print "<form action='singlePage.php' method='post'>";
            print "<input type = 'hidden' value='" . $row["id"] . "' name='id'> ";
            print "<b>NOME  </b>" . $row["nome"];
            print "<br>";
            print "<br>";
            print "<b>PREZZO  </b> € " . $row["prezzo"];
            print "<br>";
            print "<br>";
            print "<b>FOTO  </b> <img src =' " . $row["foto"] . "' width=100px height=100px>";
            print "<br>";
            print "<br>";
            print '<td><a href="zdelete.php?id=' . $row['id'] . '">Elimina</a>';
            print '<td><a href="zupdate.php?id=' . $row['id'] . '">Modifica</a>';

            print "</form>";
            print "<br> <br>";
            print "--------------------------------------------------------------------------------------------";
        }



        print "<h3> INSERISCI UNA NUOVA </h3>";
        print "<form action='singlePage.php' method='post'>";
        print "Nome : <input type = 'text' name='nome' required> ";
        print "Prezzo : <input type = 'number' name='prezzo' required> ";
        print "Fotografia URL : <input type = 'numbtexter' name='foto' required> ";


        print "<input type = 'submit' value='Invia' name='action' >";
        print "</form>";

?>