<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($_SESSION['user'] == 'admin'){
      echo "<div class='topnavigation'>
        <a href='index.php'>Home</a>
        <a href='produkter.php'>Våra produkter</a>
        <a href='databas.php'>Databas</a>
        <a href='kundvagn.php'>Kundvagn</a>
        <a href='logout.php'>Logga ut</a>
        </div>";
    }
    else{
      echo "<div class='topnavigation'>
        <a href='index.php'>Home</a>
        <a href='produkter.php'>Våra produkter</a>
        <a href='kundvagn.php'>Kundvagn</a>
        <a href='logout.php'>Logga ut</a>
        </div>";
    }

    ?>


</body>
</html>
