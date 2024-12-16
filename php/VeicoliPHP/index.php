<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicolo</title>
</head>

<body>
    <?php

    $username = "root";
    $servername = "localhost";

    $dbname = "VehicleDB";

    $password = "Ciccio02?";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        print("<h1><center> VEICOLI DB </center> </h1>");
        print("<h2>LISTA VEICOLI </h2>");

        $sql = "SELECT * FROM Auto";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

            print("<form action = 'index.php' method='post'>");
            print("<input type='hidden' name='id' value='" . $row['ID_Auto'] . "'>");
            print("<br> <br>");
            print("<b> Marca = </b>" . $row['Marca']);
            print("<br> <br>");

            print("<b> Modello = </b>" . $row['Modello']);
            print("<br> <br>");

            print("<b> anno = </b>" . $row['Anno']);
            print("<br> <br>");

            print("<b> Cilindrata = </b>" . $row['Cilindrata']);
            print("<br> <br>");

            print("<b> Alimentazione = </b>" . $row['Alimentazione']);
            print("<br> <br>");

            print("<b> Prezzo = </b>" . $row['Prezzo']);
            print("<br> <br>");

            print("<input type='submit' name='action'  value='Modifica'>");
            print("-------------------<input type='submit' name='action' value='Elimina'>");

            print("<br> <br>");

            print("</form>");
        }

        print("<h2>INSERISCI VEICOLO </h2>");

        print("<form action = 'index.php' method='post'>");
        print("Modello : <input type='text' name='Modello' >");
        print("<br> <br>");

        print("Marca : <input type='text' name='Marca' >");
        print("<br> <br>");

        print("Anno : <input type='number' name='Anno' >");
        print("<br> <br>");

        print("Cilindrata :<input type='number' name='Cilindrata' >");
        print("<br> <br>");

        print("Prezzo :<input type='number' name='Prezzo' >");
        print("<br> <br>");

        print("<input type='submit' name ='action'value='Invia'>");

        print("</form>");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $action = $_POST["action"];


        if ($action == "Invia") {
            $modello = $_POST["Modello"];
            $marca = $_POST["Marca"];
            $anno = $_POST["Anno"];
            $cilindrata = $_POST["Cilindrata"];
            $prezzo = $_POST["Prezzo"];

            $sql = "INSERT INTO Auto (Marca,Modello,Anno,Cilindrata,Prezzo) VALUES ('$marca', '$modello'  , '$anno' , '$cilindrata' , '$prezzo' )";

            $result = $conn->query($sql);
            header("location:index.php");

        }
        if ($action == "Elimina") {
            $id = $_POST["id"];


            $sql = "DELETE FROM Auto WHERE ID_Auto=" . $id;

            $result = $conn->query($sql);
            header("location:index.php");
        }

        

        if ($action == "Modifica") {
            $id = $_POST["id"];


            print("<h2>MODIFICA VEICOLO </h2>");

            $sql = "SELECT * FROM Auto WHERE ID_Auto='$id' ";

            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {

            print("<form action = 'index.php' method='post'>");
            print("<input type='hidden' name='id' value='" . $row['ID_Auto'] . "'>");
            print("<br> <br>");
            print("<b> Marca = </b> <input type ='text' name='Marca' value='" . $row['Marca']."'>");
            print("<br> <br>");

            print("<b> Modello = </b> <input type ='text' name='Modello' value='" . $row['Modello']."'>");
            print("<br> <br>");

            print("<b> Anno = </b><input type ='number' name='Anno' value='" . $row['Anno']."'>");
            print("<br> <br>");

            print("<b> Cilindrata = </b> <input type ='number' name='Cilindrata' value='" . $row['Cilindrata']."'>");
            print("<br> <br>");

            print("<b> Alimentazione = </b> <input type ='text' name='Alimentazione' value='" . $row['Alimentazione']."'>");
            print("<br> <br>");

            print("<b> Prezzo = </b><input type ='number' name='Prezzo' value='" . $row['Prezzo']."'>");
            print("<br> <br>");

            print("<input type='submit' name='action'  value='Update'>");
       

            print("<br> <br>");

            print("</form>");
            }

            }
        }

        if ($action == "Update") {
            $id = $_POST["id"];
            $modello = $_POST["Modello"];
            $marca = $_POST["Marca"];
            $anno = $_POST["Anno"];
            $cilindrata = $_POST["Cilindrata"];
            $alimentazione = $_POST["Alimentazione"];
            $prezzo = $_POST["Prezzo"];

            $sql = "UPDATE  Auto SET Marca='$marca' , Modello='$modello' , Anno='$anno' , Prezzo='$prezzo' , Alimentazione='$alimentazione'    WHERE ID_Auto = '$id' ";

            $result = $conn->query($sql);

            header("location:index.php");

        }



    


    ?>
</body>

</html>


