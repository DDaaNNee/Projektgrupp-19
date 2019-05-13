<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

  $dbServer = "dbtrain.im.uu.se";
  $username = "dbtrain_890";
  $password = "jrylmp";
  $dbname = "dbtrain_890";


  $conn = new mysqli($dbServer, $username, $password, $dbname) or die
  ("något gick fel: ". $conn -> error);


  $sql = "SELECT ID, Förnamn, Efternamn, E-mail, Telefonnummer FROM Användare";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
      echo "<br> ID: " . $row["ID"]. " - Förnamn: " . $row["Förnamn"] . "Efternamn :" . $row["Efternamn"] . "E-mail: " . $row["Email"] ."Telefonnummer: " . $row["Telefonnummer"] . "<br>";
    }
  }
  else {
      echo "0 results";
  }
 ?>

</body>
</html>
