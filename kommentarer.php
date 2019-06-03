<?php require_once("resources/support/checksession.php"); ?>
<html>
    <body>
        <form action="" method='post'>
            <input type="text" name="anvandarKommentar" required>
            <input type="submit" value="Skicka in kommentar">
        </form>
        <h4>
        <?php

            include 'resources/support/dbconnect.php';
            $commentQuery = "SELECT * FROM Kommentarer WHERE ProduktNamn LIKE '%$produktsida%'";
            $resultingQuery = $conn->query($commentQuery);
            if ($resultingQuery->num_rows > 0) {
              while($row = $resultingQuery->fetch_assoc()){
                echo "{$row['Anvandare']} ({$row['Kommentarstid']})<br> {$row['Kommentar']}<hr><br>";
            }
          }

            if(!empty($_POST['anvandarKommentar'])){
                $newComments = $_POST['anvandarKommentar'];
                $loggedUser = $_SESSION['user'];
                $produktsida = $_SESSION['produktsida'];

                $query = "INSERT INTO Kommentarer(Anvandare, Kommentar, ProduktNamn) VALUES('$loggedUser', '$newComments', '$produktsida')";

                if(mysqli_query($conn, $query)){
                    echo "Du har postat en kommentar $newComments";
                }
                else{
                    echo "Något gick fel: " . mysqli_error($conn);
                }
            }
            mysqli_close($conn);

        ?>
    </body>

</html>
