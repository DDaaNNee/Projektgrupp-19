<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Våra produkter</title>
        <link rel="stylesheet" href="resources/css/mastercss.css">
        <link rel="stylesheet" href="resources/css/bars.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <?php include 'resources/support/bars.php' ?>
        <?php include 'resources/support/dbconnect.php' ?>
    </head>
    <body>
     <!--     <img src="" alt="Gamingpaketet">  Här ska vi lägga till bild-->
        <form method="POST">
            <input type="number" name="gamingpaket" required>
            <input type="submit" name="submitGaming">
        </form>

     <!--   <img src="" alt="Träningspaketet">  Här ska vi lägga till bild-->
        <form method="POST">
            <input type="number" name="sportpaketet" required>
            <input type="submit" name="submitSport">
        </form>

      <!--    <img src="" alt="Extremsportspaketet"> Här ska vi lägga till bild-->
        <form method="POST">
            <input type="number" name="extremsport" required>
            <input type="submit" name="submitExtrem">
        </form>

    <?php

    ?>

    </body>

</html>