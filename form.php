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

$query = "INSERT INTO Users(Fornamn, Efternamn, Email, Telefonnummer) VALUES ('$fornamn', '$efternamn', '$email', '$telefonnummer')";

if (mysqli_query($conn, $query)) {
    echo "Adderad information till databasen! <br>";
}
else {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


echo "Skickad info: <br>";
echo "Förnamn: $fornamn<br>";
echo "Efternamn: $efternamn<br>";
echo "E-mail: $email<br>";
echo "Telefonnummer: $telefonnummer<br>";

header('Location: index.php'); 
 ?>
