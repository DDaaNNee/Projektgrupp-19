<?php session_start(); ?>
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
  <?php include 'resources/support/dbconnect.php' ?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <h1>Logga in<hr></h1>
    <form>
      <div class="registreringsformulär">
      <h4>
        <label for="">E-mail: </label><br>
        <input type="text" name="login_email" placeholder="Skriv in din e-mail" required autofocus> <br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="login_password" placeholder="Skriv in ditt lösenord" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <h4><input type="submit" value="Logga in" name="loggain"></h4>
      </h4>
      </div>
    </form>

    <?php








    mysqli_close($conn); ?>
  </body>


</html>
