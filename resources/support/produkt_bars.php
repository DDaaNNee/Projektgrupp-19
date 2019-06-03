<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  if (isset($_SESSION['inloggad']) && $_SESSION['inloggad'] == true){
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_topbar.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_navbar_inloggad.php');
  }
  else{
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_topbar.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/produkt_navbar_utloggad.php');
  }
  ?>
  </body>
</html>
