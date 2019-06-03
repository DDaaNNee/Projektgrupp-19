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
      <li>Namn: Nocco & Monster</li><br>
      <li>Innehåll: Nocco: BCAA (grenade aminosyror), koffein, grönt te-extrakt och vitaminer. NOCCO BCAA kommer i åtta goda smaker med kolsyra; Miami Strawberry, Blueberry, Passion, Carnival Exotic, Caribbean, Tropical, Persika och Päron. Samtliga NOCCO BCAA är sockerfria. NOCCO BCAA innehåller per portion (330 ml)</li><br>
      <li>Innehåll: Monster: VITAMINER Riboflavin (Vit B2) Niacin (Vit B3) Vitamin B6	Vitamin B12</li><br>
      <li>Näringsinnehåll: Nocco: · BCAA 4:1:1 (leucin, valin, isoleucin); 3000 mg · Koffein 180 mg· Vitamin D 100% DRI · Vitamin B6 100% DRI · Vitamin B12 100% DRI · Biotin 100% DRI · Folsyra 50% DRI · Niacin 80% DRI *DRI: Dagligt referensintag</li><br>
      <li>Näringsinnehåll: Monster: Energie	1006 kJ -	237 kcal Kolhydrater	60 g Davon socker	55 g Salt	0,96g</li><br>
      <li>Antal: Nocco: 24st Monster: 24st</li><br>
    </ul>

    <form action="../support/adderaVara.php" method="POST">
    Klicka här för att börja prenumenera på Extremepaketet <br>
    <input type="submit" name="adderaVara" value="Lägg till i kundvagn" required>
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
