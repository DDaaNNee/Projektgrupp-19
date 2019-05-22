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
//Under denna rad är det lite otydligt hur vi exakt ska göra, vi får eventuellt fråga Stuxberg
//då vi måste använda oss av saltning och kan inte spara lösenorden i "plain text".
$validating = if($validation==$selectQuery){
return true;
}
else {
    return false;
}

if($validation==true){
    //Här ska vi lägga in logg in information, vet inte riktigt hur vi ska göra det
}
else{
    echo "Fel användarnamn eller lösenord";
}

/*
if (mysqli_query($conn, $validation) {
    echo "Adderad information till databasen! <br>";
}
else {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/
header('Location: index.php');

?>