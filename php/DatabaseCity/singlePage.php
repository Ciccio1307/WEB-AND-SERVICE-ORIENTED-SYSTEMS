<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SinglePagephp</title>
</head>

<body>
    <h1>
        <center>DATABASE CITTA' VACANZE</center>
    </h1>
    <h2> LISTA CITTA' </h2>

    <?php

    $username = "root";
    $password = "Ciccio02?";

    $dbname = "DatabaseCitta";

    $servername = "localhost";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

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
            print "<input type = 'submit' value='Modifica' name='action'> ";
            print "<input type = 'submit' value='Elimina' name='action' >";
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
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST["action"];

        if ($action == "Invia") {

            $nome = $_POST["nome"];
            $foto = $_POST["foto"];

            $prezzo = $_POST["prezzo"];

            $sql = "INSERT INTO Citta (nome,prezzo,foto) VALUES ('$nome' , '$prezzo' , '$foto')";
            $result = $connection->query($sql);
            header("location:singlePage.php");
        }


        if ($action == "Elimina") {

            $id = $_POST["id"];


            $sql = "DELETE FROM Citta WHERE id=" . $id;
            $result = $connection->query($sql);
            header("location:singlePage.php");
        }



        if ($action == "Modifica") {
            $id = $_POST["id"];


            $sql = "SELECT * FROM Citta WHERE id=" . $id;
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {

                print "<form action='singlePage.php' method='post'>";
                print "<input type = 'hidden' value='" . $row["id"] . "' name='id'> ";
                print "<b>NOME  </b>" . "<input type = 'text' value='" . $row["nome"] . "' name='nome'> ";
                print "<br>";
                print "<br>";
                print "<b>PREZZO  </b>" . "<input type = 'number' value='" . $row["prezzo"] . "' name='prezzo'> ";
                print "<br>";
                print "<br>";
                print "<b>FOT  </b>" . "<input type = 'text' value='" . $row["foto"] . "' name='foto'> ";
                print "<br>";
                print "<br>";
                print "<input type = 'submit' value='Update' name='action' >";
                print "</form>";
                print "<br> <br>";
                print "--------------------------------------------------------------------------------------------";
            }
        }



        if ($action == "Update") {

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $foto = $_POST["foto"];

            $prezzo = $_POST["prezzo"];

            $sql = "UPDATE Citta SET nome='$nome' , prezzo = '$prezzo' , foto='$foto'  WHERE id=" . $id;
            $result = $connection->query($sql);
            header("location:singlePage.php");
        }
    }
    ?>

</body>

</html>