<?php
$dbServer = "dbtrain.im.uu.se";
$username = "dbtrain_890";
$password = "jrylmp";
$dbname = "dbtrain_890";

$conn = new mysqli($dbServer, $username, $password, $dbname);

if (!$conn) {
     die("Det gick inte att ansluta! Error: ". mysqli_connect_error());
}

echo "Uppkopplad! <br>";

$fornamn = $_POST['fornamn'];
$efternamn = $_POST['efternamn'];
$email = $_POST['email'];
$telefonnummer = $_POST['mobilnummer'];



?>
