<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link rel="stylesheet" href="resources/css/mastercss.css">
    <link rel="stylesheet" href="resources/css/bars.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php include 'resources/support/bars.php' ?>
    <?php include 'resources/support/dbconnect.php' ?>
  </head>
  <body>
    <h1>Databas<hr></h1>
    <h5>
    <?php
    $sql = "SELECT ID, Email, Losenord, Fornamn, Efternamn, Telefonnummer, Adress FROM Anvandare";
    $result = $conn->query($sql);
    echo"<div class='registreringsformulär'>";
    if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<tr><td>ID</td><td>Email</td><td>Lösenord</td><td>Förnamn</td><td>Efternamn</td><td>Telefonnummer</td><td>Adress</td><tr>\n";
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>{$row["ID"]}</td><td>{$row["Email"]}</td><td>{$row["Losenord"]}</td><td>{$row["Fornamn"]}</td><td>{$row["Efternamn"]}</td><td>{$row["Telefonnummer"]}</td><td>{$row["Adress"]}</td><tr>";
      }
      echo "</div>";
    }
    else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
  </h5>
  </body>
</html>
