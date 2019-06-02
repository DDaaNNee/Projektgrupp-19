<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Registreringsformulär</title>
      <link rel="stylesheet" href="resources/css/mastercss.css">
      <link rel="stylesheet" href="resources/css/bars.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include 'resources/support/bars.php' ?>
    <?php include 'resources/support/dbconnect.php' ?>
  </head>
  <body>
    <h1>Registreringsformulär<hr></h1> <!-- Använd table eller divar -->
    <form action="registrering.php" method="post">
      <div  class="registreringsformulär">
        <h4>
        <!--<label for="">Förnamn: </label><br>
        <input type="text" name="fornamn" value="" placeholder="Skriv ditt förnamn" required autofocus><br>
        <label for="">Efternamn: </label><br>
        <input type="text" name="efternamn" value="" placeholder="Skriv ditt efternamn" required><br> -->
        <label for="">E-mail: </label><br>
        <input type="email" name="email" value="" placeholder="Skriv in din e-mail" required autofocus><br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="losenord" value="" placeholder="Skriv in ditt lösenord" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <!--<label for="">Adress: </label><br>
        <input type="text" name="adress" value="" placeholder="Skriv in din adress" required><br>
        <label for="">Telefonnummer: </label><br>
        <input type="tel" name="telefonnummer" value="" placeholder="Skriv in ditt telefonnummer" required pattern="[0][7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"><br>-->
        <label for="">Jag accepterar <a href="#" onClick="alert('This Agreement and the Security Interests shall terminate on the date on which all payments under the Debentures have been indefeasibly paid in full and all other Obligations have been paid or discharged; provided, however, that all indemnities of the Debtors contained in this Agreement (including, without limitation, Annex B hereto) shall survive and remain operative and in full force and effect regardless of the termination of this Agreement.')">användarvillkoren: </a></label>
        <input type="checkbox" value="" name="accept" required> <br><br>
        <input type="submit" value="Registrera" name="regbox">
        </h4>
      </div>
      <hr>
      <h3>
      <div class="kontoFinns">
        <p>Har du ett konto? <a href="login.php">Klicka här för att logga in</a> </p>

      </div>
    </h3>
    </form>

  <?php
    if (!empty($_POST['email'])) {

    /*$fornamn = $_POST['fornamn'];
    $efternamn = $_POST['efternamn'];*/
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $losenord = mysqli_real_escape_string($conn, $_POST['losenord']);
    /*$adress = $_POST['adress'];
    $telefonnummer = $_POST['telefonnummer'];*/
      $findemail = "SELECT Email FROM Anvandare WHERE Email = '$email'";
      $resemail = mysqli_query($conn, $findemail);
      $emailres = mysqli_num_rows($resemail);

      if ($emailres != 0) {
        echo "<script>alert('E-mailen finns redan registrerad!')</script>";
      }
      else{
        $hashedPass = password_hash($losenord, PASSWORD_DEFAULT);
        $query = "INSERT INTO Anvandare(Email, Losenord) VALUES ('$email', '$hashedPass')";
        if (mysqli_query($conn, $query)) {
          echo "<script> alert('Adderad information till databasen!') location.href='login.php'</script>";
        }
        else {
          echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
    }
  mysqli_close($conn);
     ?>
  </body>
</html>
