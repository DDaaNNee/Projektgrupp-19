<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <div id="index_topbar">
    </div>
    <div id="index_navbar">
    </div>

    <script>
    $(function(){
      $("#index_topbar").load("topbar.html");
    });
    $(function(){
      $("#index_navbar").load("navbar.html");
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
