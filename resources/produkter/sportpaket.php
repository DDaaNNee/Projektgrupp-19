<?php require_once("resources/support/checksession.php"); ?>
<html>
  <h6 href="index.php"><img src="resources/img/My Post(1).png" width="100%" height="100%">

  <form action="kundvagn.php" method="POST">
  Klicka här för att börja prenumenera på Sportpaketet <br>
  <input type="submit" name="submitSport" required>
  </form>
</html>
<?php
include 'resources/support/dbconnect.php';

$sportpaket = $_POST['submitSport'];

$antalSport = mysqli_real_escape_string($sportpaket, $conn);
$sportQuery = "INSERT INTO Beställningar(Sportpaket) VALUES ($antalSport)";
$addSport=mysqli_query($conn, $sportQuery);

?>
