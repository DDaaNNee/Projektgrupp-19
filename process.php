<!DOCTYPE html>
<?php
  $dbServer = "dbtrain.im.uu.se";
  $username = "dbtrain_890";
  $password = "jrylmp";
  $dbname = "dbtrain_890";


  $conn = new mysqli($dbServer, $username, $password, $dbname) or die
  ("något gick fel: " . $conn->connect_error);

  $sql = "SELECT ID, Förnamn, Efternamn, E-mail, Telefonnummer FROM Användare";
  $resultat = mysqli_query($conn, $sql);

  if (mysqli_num_rows($resultat) > 0) {
    while ($row = mysqli_fetch_assoc($resultat)) {
      echo "ID: " . $row["ID"]. " - Förnamn: " . $row["Förnamn"] . "Efternamn :" . $row["Efternamn"] . "E-mail: " . $row["Email"] ."Telefonnummer: " . $row["Telefonnummer"] . "<br>";
    }
  }
  else {
      echo "0 results";
  }

  /*
  // Create connection
  $conn = mysqli_connect($dbServer, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM Användare";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "ID: " . $row["ID"]. " - Förnamn: " . $row["Förnamn"] . "Efternamn :" . $row["Efternamn"] . "E-mail: " . $row["Email"] ."Telefonnummer: " . $row["Telefonnummer"] . "<br>";
      }
  } else {
      echo "0 results";
  } */
 ?>
