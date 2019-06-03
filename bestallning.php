<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="resources/css/mastercss.css">
    <link rel="stylesheet" href="resources/css/bars.css">
    <link rel="stylesheet" href="resources/css/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include 'resources/support/bars.php' ?>
    <?php include 'resources/support/dbconnect.php'; ?>

  </head>
  <body>
    <h1>Din beställning<hr></h1>
    <?php include 'resources/support/kollainfo.php' ?>
    <?php echo "<div class='addera_info'>"; ?>
    <?php include 'resources/support/leaflet.php'; ?>
    <h4>
      <?php
      $currUser = $_SESSION['user'];
      $queryKundvagn = "SELECT * FROM Kundvagn WHERE UserID = '$currUser'";
      $result = $conn->query($queryKundvagn);
      if ($result->num_rows > 0) {
        echo "<h4>";
        echo "<table border='1'>";
        echo "<tr><td>Produktnamn</td><td>Pris</td>";
        while ($row = $result -> fetch_assoc()) {
          echo "<tr><td>{$row["Produktnamn"]}</td><td>{$row['Pris']}</td>";
        }

      }
      else {
          echo "Du har inte lagt till några varor i din kundvagn än!";
      }
      echo "</h4>";

       ?>
     <form action="resources/support/laggBestallning.php" method="">
       <input type="submit" name="laggBestallning" value="Lägg beställning">
     </form>
  </body>
</html>
