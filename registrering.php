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
      <div class="registreringsformulär">
        <h4>
        <!--<label for="">Förnamn: </label><br>
        <input type="text" name="fornamn" value="" placeholder="Skriv ditt förnamn" required autofocus><br>
        <label for="">Efternamn: </label><br>
        <input type="text" name="efternamn" value="" placeholder="Skriv ditt efternamn" required><br> -->
        <label for="">E-mail: </label><br>
        <input type="text" name="email" value="" placeholder="Skriv in din e-post" required autofocus><br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="losenord" value="" placeholder="Skriv in ditt lösernord" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <!--<label for="">Adress: </label><br>
        <input type="text" name="adress" value="" placeholder="Skriv in din adress" required><br>
        <label for="">Telefonnummer: </label><br>
        <input type="tel" name="telefonnummer" value="" placeholder="Skriv in ditt telefonnummer" required pattern="[0][7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"><br>-->
        <label for="">Jag accepterar användarvillkoren: </label>
        <input type="checkbox" value="" name="accept" required> <br><br>
        <input type="submit" value="Registrera" name="regbox">
        </h4>
      </div>
      <hr>
      <h3>
      <div class="kontoFinns">
        <p>Har du ett konto? <a href="login.php">Logga in</a> </p>

      </div>
    </h3>
    </form>

    <?php
    if (!empty($_POST['email'])) {

    /*$fornamn = $_POST['fornamn'];
    $efternamn = $_POST['efternamn'];*/
    $email = mysqli_real_escape_string($_POST['email']);
    $losenord = mysqli_real_escape_string($_POST['losenord']);
    /*$adress = $_POST['adress'];
    $telefonnummer = $_POST['telefonnummer'];*/

    $query = "INSERT INTO Anvandare(Email, Losenord) VALUES ('$email', '$losenord')";

      if (mysqli_query($conn, $query)) {
          echo "Adderad information till databasen! <br>";
      }
      else {
          echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
      }
    mysqli_close($conn);
  }
     ?>
  </body>
</html>
