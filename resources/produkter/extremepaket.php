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
    <h6 href="index.php"><img name="extreme" class="extreme" src="../../resources/img/Extremepaketet.png">
    <h4>
    <ul>
      <li>Namn: Nocco</li><br>
      <li>Innehåll: BCAA (grenade aminosyror), koffein, grönt te-extrakt och vitaminer. NOCCO BCAA kommer i åtta goda smaker med kolsyra; Miami Strawberry, Blueberry, Passion, Carnival Exotic, Caribbean, Tropical, Persika och Päron. Samtliga NOCCO BCAA är sockerfria. NOCCO BCAA innehåller per portion (330 ml)</li><br>
      <li>

    <form action="kundvagn.php" method="POST">
    Klicka här för att börja prenumenera på Extremepaketet <br>
    <input type="submit" name="submitExtreme" required>
    </form>
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
