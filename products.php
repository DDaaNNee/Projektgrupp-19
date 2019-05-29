<?php session_start(); ?>
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
            <input type="submit" name="submitGaming" required>
        </form>

     <!--   <img src="" alt="Träningspaketet">  Här ska vi lägga till bild-->
        <form method="POST">
            <input type="number" name="sportpaket" required>
            <input type="submit" name="submitSport" required>
        </form>

      <!--    <img src="" alt="Extremsportspaketet"> Här ska vi lägga till bild-->
        <form method="POST">
            <input type="number" name="extremsportpaket" required>
            <input type="submit" name="submitExtrem" required>
        </form>

    <?php
        //Metod för att lägga till antal gamingpaket i databasen
        $antalGaming = mysqli_real_escape_string($_POST['gamingpaket']);
        $gamingQuery = "INSERT INTO Beställningar(Gamingpaket) VALUES ($antalGaming)";
        $addGaming=mysqli_query($connection, $gamingQuery);

        //Metod för att lägga till antal sportpaket i databasen
        $antalSport = mysqli_real_escape_string($_POST['sportpaket']);
        $sportQuery = "INSERT INTO Beställningar(Sportpaket) VALUES ($antalSport)";
        $addSport=mysqli_query($connection, $sportQuery);

        //Metod för att lägga till antal extrempaket i databasen
        $antalExtrem = mysqli_real_escape_string($_POST['extremsportpaket']);
        $extremQuery = "INSERT INTO Beställningar(Extrempaket) VALUES ($antalExtrem)";
        $addSport=mysqli_query($connection, $extremQuery);
    ?>

    </body>

</html>