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
    <?php include 'resources/support/access.php' ?>
  </head>
  <body>
    <h1>Din kundvagn<hr></h1>
    <h3>

    <?php
    $currUser = $_SESSION['user'];
    $queryKundvagn = "SELECT * FROM Kundvagn WHERE UserID = '$currUser'";
    $result = $conn->query($queryKundvagn);
    if ($result->num_rows > 0) {
      echo "<b>Produktnamn | Pris </b><br>";
      /*while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>{$row["Produktnamn"]}</td><td>{$row['Pris']}</td>";
      }*/
      while ($row = $result -> fetch_assoc()) {
        echo "[{$row["Produktnamn"]}] | ({$row['Pris']} kr)<br>";
      }
    }
    else {
        echo "<h3>Du har inte lagt till några varor i din kundvagn än!</h3>";
    }

  mysqli_close($conn);

     ?>
     <br>
     <form action='resources/support/tomKundvagn.php' method='post'>
            <div>
             <input type='submit' name='tomKundvagn' value='Töm kundvagn'>
            </div>
          </form>

    <form action="bestallning.php" method='post'>
      <input type="submit" name="skickaBestallning" value="Gå till beställning">

    </form>
  </body>
</html>
