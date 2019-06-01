<?php require_once("resources/support/checksession.php"); ?>
<html>
  <h6 href="index.php"><img src="resources/img/nocco.png" width="40%" height="40%">

  <form action="kundvagn.php" method="POST">
    <a>Vilket antal vill du köpa?</a><br>
    <select name="Antal">
      <option value="12">12st</option>
      <option value="24">24st</option>
    </select>
      <a>Klicka här för att börja prenumenera på Sportpaketet</a> <br>
      <input type="submit" name="submitSport" required>
  </form>
</html>
<?php
include 'resources/support/dbconnect.php';

$sportpaket = $_POST['Antal'];

$antalSport = mysqli_real_escape_string($conn, $sportpaket);
$sportQuery = "INSERT INTO Kundvagn(Produktnamn) VALUES ($antalSport)";
$addSport=mysqli_query($conn, $sportQuery);

?>
