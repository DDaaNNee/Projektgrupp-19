<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<?php
include 'dbconnect.php';

$currSida = $_SESSION['produktsida'];
$currUser = $_SESSION['user'];
if ($currSida == 'extremepaket.php') {
  $paket = 'Extremepaket';
  $pris = 500;
  $produktNum = 1;
}
else if ($currSida == 'gamingpaket.php') {
  $paket = 'Gamingpaket';
  $pris = 350;
  $produktNum = 2;
}
else if ($currSida == 'sportpaket.php') {
  $paket = 'Sportpaket';
  $pris = 350;
  $produktNum = 3;
}

$adderaProdukt = "INSERT INTO Kundvagn(ProduktNR, ProduktNamn, UserID, Pris) VALUES ('$produktNum', '$paket', '$currUser', '$pris')";
mysqli_query($conn, $adderaProdukt) or die(mysqli_error($conn));

echo "<script> location.href='../../kundvagn.php'</script>";


 ?>
