<?php
$dbServer = "dbtrain.im.uu.se";
$username = "dbtrain_890";
$password = "jrylmp";
$dbname = "dbtrain_890";

$conn = new mysqli($dbServer, $username, $password, $dbname) or die
("Something went wrong: ". $conn -> error);

mysqli_set_charset($conn,"utf8");
 ?>
