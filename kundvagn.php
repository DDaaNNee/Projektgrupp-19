<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="resources/css/mastercss.css">
    <link rel="stylesheet" href="resources/css/bars.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include 'resources/support/bars.php' ?>
    <?php include 'resources/support/access.php' ?>
  </head>
  <body>
    <h1>Din kundvagn<hr></h1>
      <?php /*valda produkter ska placeras i kundvagnen*/
        if(!empty($_SESSION['username'])){
          /*produkterna ska ligga i ett form eller bara stå ur ett echo*/
          /*$findUser="SELECT Email, Adress, ID, Tel FROM Anvandare WHERE Email='$loginEmail'";
          $orderQuerySQL= mysqli_query($conn, $findUser) or die(mysqli_error($conn));;*/

          /*$order = "INSERT INTO Orders(Email, ID, ProduktNR, Telefonnummer, Adress, Antal) VALUES ('$email', '$adress', '$ID', '$produktNR', '$tel', '$antal')";*/
          if (mysqli_query($conn, $query)) {
              echo "Adderad information till databasen! <br>";
          }
        }?>
  </body>
</html>
