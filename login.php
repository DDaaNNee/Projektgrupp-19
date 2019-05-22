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
$password = $_POST['userPassword'];

$validation = "INSERT INTO TempUser('tempUser', 'tempPassword') VALUES ('$userName', 'userPassword')";

$selectQuery= "SELECT 'Email' AND 'Password' FROM 'Users'";

$validating = if($validation==$selectQuery){
return true;
}
else {
    return false;
}

if($validation){

}


if (mysqli_query($conn, $validation) {
    echo "Adderad information till databasen! <br>";
}
else {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: index.php');

?>