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

$userName = $_POST['userName'];
$password = $_POST['password'];

$validation = "INSERT INTO Users(Fornamn, Efternamn, Email, Telefonnummer) VALUES ('$userName', 'password')";

if (mysqli_query($conn, $validation==)) {
    echo "Adderad information till databasen! <br>";
}
else {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index.php');

?>