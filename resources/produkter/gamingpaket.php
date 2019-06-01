<?php require_once("resources/support/checksession.php"); ?>
<html>
  <h6 href="index.php"><img src="resources/img/redbull.png" width="40%" height="40%">

  <form action="kundvagn.php" method="POST">
  Klicka här för att börja prenumenera på Gamingpaketet <br>
  <input type="submit" name="submitGaming" required>
  </form>
</html>
<?php
include 'resources/support/dbconnect.php';

$gamingPaket = $_POST['submitGaming'];

$antalGaming = mysqli_real_escape_string($conn, $gamingPaket);
$gamingQuery = "INSERT INTO Beställningar(Sportpaket) VALUES ($antalGaming)";
$addGaming = mysqli_query($conn, $gamingQuery);

?>
