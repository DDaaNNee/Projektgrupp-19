<?php require_once("resources/support/checksession.php"); ?>
<html>
  <h6 href="index.php"><img src="resources/img/extreme.png" width="40%" height="40%">

  <form action="kundvagn.php" method="POST">
  Klicka här för att börja prenumenera på Extremepaketet <br>
  <input type="submit" name="submitExtreme" required>
  </form>
</html>
<?php
include 'resources/support/dbconnect.php';

$extremePaket = $_POST['submitExtreme'];

$antalExtreme = mysqli_real_escape_string($conn, $extremePaket);
$extremeQuery = "INSERT INTO Beställningar(Extremepaketet) VALUES ($antalExtreme)";
$addExtreme=mysqli_query($conn, $extremeQuery);

?>
