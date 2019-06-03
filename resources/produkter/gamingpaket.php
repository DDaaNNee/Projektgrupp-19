<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Våra produkter</title>
    <link rel="stylesheet" href="../../resources/css/mastercss.css">
    <link rel="stylesheet" href="../../resources/css/bars.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_bars.php') ?>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/dbconnect.php') ?>
</head>
  <body>
    <h6 href="index.php"><img src="../../resources/img/redbull.png" width="40%" height="40%">

    <form action="kundvagn.php" method="POST">
    Klicka här för att börja prenumenera på Gamingpaketet <br>
    <input type="submit" name="submitGaming" required>
    </form>
  </html>
  <?php
    $produktsida = basename(__FILE__);
/*
  $gamingPaket = $_POST['submitGaming'];

  $antalGaming = mysqli_real_escape_string($conn, $gamingPaket);
  $gamingQuery = "INSERT INTO Beställningar(Sportpaket) VALUES ($antalGaming)";
  $addGaming = mysqli_query($conn, $gamingQuery); */

    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produktbar.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/kommentarer.php');
  ?>

  </body>
</html>
