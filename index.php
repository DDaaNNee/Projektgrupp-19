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
    <h10>
    <?php
    include 'header.php';
    include 'process.php';

    echo "Uppkopplad! <br>";

    $sql = "SELECT ID, Fornamn, Efternamn, Email, Telefonnummer FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result -> fetch_assoc()) {
        echo "<br> ID: " . $row["ID"]. "<br>Förnamn: " . $row["Fornamn"] . "<br>Efternamn: " . $row["Efternamn"] . "<br>E-mail: " . $row["Email"] ."<br>Telefonnummer: " . $row["Telefonnummer"] . "<br>";
      }
    }
    else {
        echo "0 results";
    }
    ?>
  </h10>
  </body>
</html>
