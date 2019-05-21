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
    <?php require 'process.php'; ?>
    <h5>
    <?php

    $sql = "SELECT ID, Fornamn, Efternamn, Email, Telefonnummer FROM Users";
    $result = $conn->query($sql);

    echo "<table border='1'>";
    echo "<tr><td>ID</td><td>Förnamn</td><td>Efternamn</td><td>E-mail</td><td>Telefonnummer</td><tr>\n";

    if ($result->num_rows > 0) {
      while ($row = $result -> fetch_assoc()) {
        echo "<tr><td>{$row["ID"]}</td><td>{$row["Fornamn"]}</td><td>{$row["Efternamn"]}</td><td>{$row["Email"]}</td><td>{$row["Telefonnummer"]}</td><tr>";
      }
    }
    else {
        echo "0 results";
    }
    ?>
  </h5>
  </body>
</html>
