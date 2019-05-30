<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Logga in</title>
  <link rel="stylesheet" href="resources/css/mastercss.css">
  <link rel="stylesheet" href="resources/css/bars.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <?php include 'resources/support/bars.php' ?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <h1>Logga in<hr></h1>
    <form class="login_form" method="post">
      <div class="registreringsformulär">
      <h4>
        <label for="">E-mail: </label><br>
        <input type="text" name="login_email" placeholder="Skriv in din e-mail" required autofocus> <br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="login_password" placeholder="Skriv in ditt lösenord" required> <br><br><br>
        <input type="submit" value="Logga in" name="loggain">
      </h4>
      </div>
      <hr>
    </form>

    <?php
    include 'login_.php';
    ?>
  </body>


</html>
