<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <div id="topbar">
    </div>
    <div id="navbar">
    </div>

    <script>
    $(function(){
      $("#topbar").load("topbar.html");
    });
    $(function(){
      $("#navbar").load("navbar.html");
    });
    </script>

<?php

  $dbServer = "dbtrain.im.uu.se";
  $username = "dbtrain_890";
  $password = "jrylmp";
  $dbname = "dbtrain_890";


  $conn = new mysqli($dbServer, $username, $password, $dbname) or die
  ("Något gick fel: ". $conn -> error);
 ?>

</body>
</html>
