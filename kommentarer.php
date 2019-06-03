<?php require_once("resources/support/checksession.php"); ?>
<html>
    <body>
        <form action="" method='post'>
        </form>
        <h4>
        <?php
        include 'resources/support/dbconnect.php';
        echo "<form action='' class='kommentarsForm' method='post'>";


            $commentQuery = "SELECT * FROM Kommentarer WHERE ProduktNamn LIKE '%$produktsida%'";
            $resultingQuery = $conn->query($commentQuery);
            if ($resultingQuery->num_rows > 0) {
              while($row = $resultingQuery->fetch_assoc()){
                echo "{$row['Anvandare']} ({$row['Kommentarstid']}):<br> {$row['Kommentar']}<hr>";
            }
          }


            if(!empty($_POST['anvandarKommentar'])){
                $newComments = mysqli_real_escape_string($conn, $_POST['anvandarKommentar']);
                $loggedUser = $_SESSION['user'];
                $produktsida = $_SESSION['produktsida'];

                $query = "INSERT INTO Kommentarer(Anvandare, Kommentar, ProduktNamn) VALUES('$loggedUser', '$newComments', '$produktsida')";

                if(mysqli_query($conn, $query)){
                    echo "Du har postat en ny kommentar: '$newComments'<br><br>";
                }
                else{
                    echo "Något gick fel: " . mysqli_error($conn);
                }
            }
            echo "<textarea type='text' name='anvandarKommentar' placeholder='Skriv en kommentar!'' required></textarea>
            <input type='submit' name='skicka_kommentar' value='Skicka kommentar'>
        </form>";

        mysqli_close($conn);
        ?>

    </body>
</html>
