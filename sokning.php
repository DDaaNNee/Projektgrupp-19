<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sökresultat</title>
  <link rel="stylesheet" href="resources/css/mastercss.css">
  <link rel="stylesheet" href="resources/css/bars.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <?php include 'resources/support/bars.php'?>
  <?php /*include 'resources/support/dbconnect.php' */?>
</head>
<body>
<h1><b>Sökresultat</b></h1>
<hr>
<?php
$hittaProdukt = $_POST['sokruta'];
if (!empty($hittaProdukt) && $hittaprodukt != 'Sök...') {
  mysqli_query($conn, $queryProdukter);
  $queryProdukter = "SELECT * FROM Produkter WHERE Produktnamn LIKE '%$hittaProdukt%';"
  $result = $conn->query($queryProdukter);
  if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><td>ProduktID</td><td>Produkt</td><tr>";
    while ($row = $result -> fetch_assoc()) {
      echo "<tr><td>{$row["ProduktID"]}</td><tr>";
    }
  }
  else {
      echo "Vi hittade inga resultat för din sökning!";
  }
mysqli_close($conn);
}

?>
</body>
 </html>
