<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/dbconnect.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/Projektgrupp19/resources/support/checksession.php');

    $useremail = $_SESSION['user'];
    $queryFornamn = "SELECT Fornamn FROM Anvandare WHERE Email = '$useremail'";
    $queryEfternamn = "SELECT Efternamn FROM Anvandare WHERE Email = '$useremail'";
    $queryAdress = "SELECT Adress FROM Anvandare WHERE Email = '$useremail'";
    $queryTelefonnummer = "SELECT Telefonnummer FROM Anvandare WHERE Email = '$useremail'";

    $resultFornamn = mysqli_query($conn, $queryFornamn) or die(mysqli_error($conn));
    $resultEfternamn = mysqli_query($conn, $queryEfternamn) or die(mysqli_error($conn));
    $resultAdress = mysqli_query($conn, $queryAdress) or die(mysqli_error($conn));
    $resultTelefonnummer = mysqli_query($conn, $queryTelefonnummer) or die(mysqli_error($conn));

    $rowFornamn = mysqli_fetch_row($resultFornamn);
    $rowFornamn = $rowFornamn[0];
    $rowEfternamn = mysqli_fetch_row($resultEfternamn);
    $rowEfternamn = $rowEfternamn[0];
    $rowAdress = mysqli_fetch_row($resultAdress);
    $rowAdress = $rowAdress[0];
    $rowTelefonnummer = mysqli_fetch_row($resultTelefonnummer);
    $rowTelefonnummer = $rowTelefonnummer[0];

    $fornamn = '';
    $efternamn = '';
    $adress = '';
    $telefonnummer = '';

    echo "<form class='registreringsformulär' method='post'>";
    echo "<div class='addera_info'>";
    echo "<h4>";


    if (is_null($rowFornamn) == 'true') {
      echo "<label for=''>Förnamn: </label><br>
      <input type='text' name='fornamn' value='' placeholder='Skriv in ditt förnamn' autofocus required><br>";
    }
    if (is_null($rowEfternamn) == 'true') {
      echo "<label for=''>Efternamn: </label><br>
      <input type='text' name='efternamn' value='' placeholder='Skriv in ditt efternamn' required><br>";
    }
    if (is_null($rowAdress) == 'true') {
      echo "<label for=''>Adress: </label><br>
      <input type='text' name='adress' value='' placeholder='Skriv in din adress' required><br>";
    }
    if (is_null($rowTelefonnummer) == 'true') {
      echo "<label for=''>Telefonnummer: </label><br>
      <input type='number' name='telefonnummer' value='' placeholder='Skriv in ditt telefonnummer' required><br>";
    }
    if (is_null($rowFornamn) == 'true' || is_null($rowEfternamn) == 'true' || is_null($rowAdress) == 'true' || is_null($rowTelefonnummer) == 'true') {
      echo "<input type='submit' name='skickainfo' value='Skicka'";
      if (!empty($_POST['fornamn'])) {
        $fornamn = mysqli_real_escape_string($conn, $_POST['fornamn']);
      }
      if (!empty($_POST['efternamn'])) {
        $efternamn = mysqli_real_escape_string($conn, $_POST['efternamn']);
      }
      if (!empty($_POST['adress'])) {
        $adress = mysqli_real_escape_string($conn, $_POST['adress']);
      }
      if (!empty($_POST['telefonnummer'])) {
        $telefonnummer = mysqli_real_escape_string($conn, $_POST['telefonnummer']);
      }
      if (!empty($_POST['fornamn']) || !empty($_POST['efternamn']) || !empty($_POST['adress']) || !empty($_POST['telefonnummer'])) {
        $query = "UPDATE Anvandare SET Fornamn = '$fornamn', Efternamn = '$efternamn', Adress = '$adress', Telefonnummer = '$telefonnummer' WHERE Email = '$useremail'";
        mysqli_query($conn, $query);
      }

    }
    else {
      
    }
    echo "</h4>";
    echo "</div>";
    echo "</form>";
    ?>
  </body>
</html>
