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

    <div id="klarnaBet" style="width:100%;height:400px;"></div>
    <script>
      function myBet() {
      var betProp= {
                      center:new klarna.logIn.Bet(),
                    };
      var bet = new klana.logIn.Bet(document.getElementById("klarnaBet"),betProp);
      }
    </script>

<script src="https://app.klarna.com/login?market=se&_ga=2.44112225.413331111.1557996630-174748787.1557996630"></script>

  </body>
</html>
