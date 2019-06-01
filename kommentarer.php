<html>
    <head></head>

    <body>
        <form method='post'>
            <input type="text" name="userComment" required>
            <input type="submit" value="Skicka in kommentar">
        </form>
    </body>

</html>




<?php
    session_start();
    include 'dbconnect.php';
    $commentQuery="SELECT * FROM Kommentarer";
    $resultingQuery=$conn->query($commentQuery);
    while($row=$result->fetch_assoc()){
        echo "$row['Anvandare']","$row['Kommentarstid']"<br>;
        echo "$row['Kommentar']" <br>;
    }
?>