<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <?php
    if (isset($_SESSION['inloggad']) && $_SESSION['user'] == 'admin') {
    }
    else {
      echo "<script> alert('Något gick fel!'); location.href='index.php'";
    }
     ?>

  </body>
</html>
