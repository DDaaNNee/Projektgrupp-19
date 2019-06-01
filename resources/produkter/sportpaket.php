<?php require_once("resources/support/checksession.php"); ?>
<html>
  <h6 href="index.php"><img src="resources/img/nocco.png" width="40%" height="40%">

  <form action="kundvagn.php" method="POST">
    <a>Välj paket</a><br>
    <select name="Produkt">
      <option value="sportpaket">Sportpaket</option>
      <option value="gamingpaket">Gamingpaket</option>
      <option value="extremepaket">Extremetpaket</option>
    </select><br>
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
$paket = $_POST['Produkt'];
$antal = $_POST['Antal'];

if (!empty($paket) && !empty($antal)) {

  $valdProdukt = mysqli_real_escape_string($conn, $paket);
  $antalProdukt = mysqli_real_escape_string($conn, $antal);
  $produktQuery = "INSERT INTO Kundvagn(Produktnamn, Antal) VALUES ('$valdProdukt', '$antalProdukt')";
  $addProdukt=mysqli_query($conn, $produktQuery);
}
?>
