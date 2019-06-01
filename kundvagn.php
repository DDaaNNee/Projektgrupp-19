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
    <?php include 'resources/support/dbconnect.php'; ?>
  </head>
  <body>
    <h1>Din kundvagn<hr></h1>
    <h5>
    <?php
    $queryKundvagn = "SELECT * FROM Kundvagn";
    $result = $conn->query($queryKundvagn);
    if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<tr><td>Produktnamn</td><td>Antal</td><td>Månader</td><td>E-mail</td><tr>\n";
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>{$row["Produktnamn"]}</td><td>{$row["Antal"]}</td><td>{$row["Manader"]}</td><td>{$row["UserID"]}</td><tr>";
      }
    }
    else {
        echo "Du har inte lagt till några varor i din kundvagn än!";
    }
  mysqli_close($conn);

     ?>
  </body>
</html>
