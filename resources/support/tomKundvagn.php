<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/dbconnect.php') ?>
<?php

$currUser = $_SESSION['user'];
$queryKundvagn = "SELECT * FROM Kundvagn WHERE UserID = '$currUser'";
$result = $conn->query($queryKundvagn);
if ($result->num_rows > 0) {
    $tomKundvagn = "DELETE FROM Kundvagn WHERE UserID = '$currUser'";
    mysqli_query($conn, $tomKundvagn);
    echo "<script> location.href='../../kundvagn.php' </script>";
}
else {
  echo "Du har inga produkter i din kundvagn!";
}
mysqli_close($conn);
?>
