<?php require_once("resources/support/checksession.php"); ?>
<html>
    <body>
        <form action='Kommentarer.php'method='post'>
            <input type="text" name="anvandarKommentar" required>
            <input type="submit" value="Skicka in kommentar">
        </form>
    </body>

</html>




<?php
    session_start();
    include 'resources/support/dbconnect.php';
    $commentQuery="SELECT * FROM Kommentarer WHERE '$produktsida' LIKE %Produktnamn%";
    $resultingQuery=$conn->query($commentQuery);
    while($row=$result->fetch_assoc()){
        echo "$row['Anvandare']","$row['Kommentarstid']"<br>;
        echo "$row['anvandarKommentar']" <br>;
    }

    if(!empty($_POST['anvandarKommentar'])){
        $newComments= mysqli($conn, $_POST['anvandarKommentar']);
        $loggedUser= $_SESSION['Anvandare'];

        $query"INSERT INTO Kommentarer(Anvandare, anvandarKommentar) VALUES('$loggedUser', '$newComments')";

        if(mysqli_query($conn, $query)){
            echo "Du har postat en kommentar $newComments";
        }
        else{
            echo "Något gick fel: " .$sql.mysqli_error($conn);
        }
    }
?>
