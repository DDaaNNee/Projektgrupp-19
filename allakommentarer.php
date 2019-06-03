<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link rel="stylesheet" href="resources/css/mastercss.css">
    <link rel="stylesheet" href="resources/css/bars.css">
    <script src="resources/js/scrollDivs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include 'resources/support/bars.php' ?>
    <?php include 'resources/support/dbconnect.php' ?>
    <?php require_once('resources/support/access.php') ?>
  </head>
        <form action="" method='post'>
        </form>
        <h4>
        <?php

        echo "<hr>";
        echo "<div id='commentDIV' style='overflow-y: auto; height: 460px;>";
        echo "<form action='' class='kommentarsForm' method='post'>";
            $commentQuery = "SELECT * FROM Kommentarer";
            $resultingQuery = $conn->query($commentQuery);
            if ($resultingQuery->num_rows > 0) {
              while($row = $resultingQuery->fetch_assoc()){
                echo "ID[{$row['KommentarsID']}] <br>{$row['Anvandare']} ({$row['Kommentarstid']}):<br> '{$row['Kommentar']}'<hr>";
            }
          }
          else {
            echo "Det finns inga kommentarer att visa!";
          }

            if(!empty($_POST['valdKommentar'])){
                $val = mysqli_real_escape_string($conn, $_POST['valdKommentar']);

                $query = "DELETE FROM Kommentarer WHERE KommentarsID ='$val'";

                if(mysqli_query($conn, $query)){
                    echo "Du tog bort $val";
                }
                else{
                    echo "Något gick fel: " . mysqli_error($conn);
                }
            }
            echo "</div>";
            echo "<textarea type='text' name='valdKommentar' placeholder='Skriv in ID:n på kommentaren du vill ta bort!' required></textarea>
            <input type='submit' name='tabort_kommentar' value='Ta bort kommentar'>
        </form>";
            mysqli_close($conn);
        ?>

    </body>

</html>
