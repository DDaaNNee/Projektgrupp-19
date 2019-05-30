<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  if (isset($_SESSION['inloggad']) && $_SESSION['inloggad'] == true){
    include 'resources/support/topbar.php';
    include 'resources/support/navbar_inloggad.php';
  }
  else{
    include 'resources/support/topbar.php';
    include 'resources/support/navbar_utloggad.php';
  }
  ?>
  </body>
</html>
