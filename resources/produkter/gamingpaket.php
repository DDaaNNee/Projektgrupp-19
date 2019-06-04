<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Våra produkter</title>
    <link rel="stylesheet" href="../../resources/css/mastercss.css">
    <link rel="stylesheet" href="../../resources/css/bars.css">
    <script src="../../resources/js/scrollDivs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_bars.php') ?>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/dbconnect.php') ?>
</head>
  <body>
    <h6 href="index.php"><img name="gaming" src="../../resources/img/CompletedGamerYesboi.png"></h6>
      <h4>
        <ul>
          <li>Namn: Monster</li><br>
          <li>Innehåll: VITAMINER Riboflavin (Vit B2) Niacin (Vit B3) Vitamin B6	Vitamin B12</li><br>
          <li>Näringsinnehåll: Monster: Energie	1006 kJ -	237 kcal Kolhydrater	60 g Davon socker	55 g Salt	0,96g</li><br>
          <li>Antal: 24st</li><br>
        </ul>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
          echo "<form action='../support/adderaVara.php' method='POST'>
          Klicka här för att börja prenumenera på Gamingpaketet! <br>
          <input type='submit' name='adderaVara' value='Lägg till i kundvagn' required>
          </form>";
        } ?>
      </html>
      <?php
        $produktsida = basename(__FILE__);
        $_SESSION['produktsida'] = $produktsida;

        echo "<hr>";
        echo "<div id='commentDIV' style='overflow-y: auto; height: 460px;>";
        include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/kommentarer.php');
        include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produktbar.php');
      ?>

  </body>
</html>
