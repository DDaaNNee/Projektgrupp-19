<?php
$dbServer = "dbtrain.im.uu.se";
$username = "dbtrain_890";
$password = "jrylmp";
$dbname = "dbtrain_890";

$conn = new mysqli($dbServer, $username, $password, $dbname) or die
("Något gick fel: ". $conn -> error);

$fornamn = $_POST['fornamn'];
$efternamn = $_POST['efternamn'];
$email = $_POST['email'];
$telefonnummer = $_POST['mobilnummer'];

$query = "INSERT INTO 'Users'('Fornamn','Efternamn','Email','Telefonnummer') VALUES ('$fornamn', '$efternamn', '$email', '$telefonnummer')";

mysqli_query($conn, $query);

echo "Skickad info: <br>";
echo "Förnamn: $fornamn<br>";
echo "Efternamn: $efternamn<br>";
echo "E-mail: $email<br>";
echo "Telefonnummer: $telefonnummer<br>";
 ?>
