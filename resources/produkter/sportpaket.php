<?php require_once("../../resources/support/checksession.php"); ?>
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
    <h6 href="index.php"><img src="../../resources/img/nocco.png" width="40%" height="40%">

    <form action="" method="POST">
      <a>Välj paket</a><br>
      <select name="Produkt">
        <option value="sportpaket">Sportpaket</option>
        <option value="gamingpaket">Gamingpaket</option>
        <option value="extremepaket">Extremetpaket</option>
      </select><br>
      <a>Vilket antal vill du köpa?</a><br>
      <select name="Antal">
        <option value="12">12st</option>
        <option value="24">24st</option><br>
      </select>
      <input type="text" name="manader" value=""><br>
        <a>Klicka här för att lägga till produkt</a> <br>
        <input type="submit" name="submitSport" required>
    </form>

    <?php
    $produktsida = basename(__FILE__);

    if (!empty($_POST['manader'])) {

    $paket = $_POST['Produkt'];
    $antal = $_POST['Antal'];
    $manad = $_POST['manader'];
    $userID = $_SESSION['user'];

    $valdProdukt = mysqli_real_escape_string($conn, $paket);
    $antalProdukt = mysqli_real_escape_string($conn, $antal);
    $antalManad = mysqli_real_escape_string($conn, $manad);

    $produktQuery = "INSERT INTO Kundvagn(Produktnamn, Antal, Manader, UserID) VALUES ('$valdProdukt', '$antalProdukt', '$manad', '$userID')";
    mysqli_query($conn, $produktQuery);
  }
  include 'resources/support/produktbar.php';
  ?>
  </body>
</html>
