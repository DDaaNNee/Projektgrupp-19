<?php
include 'process.php';
include 'header.php';

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
