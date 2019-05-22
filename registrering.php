<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registreringsformulär</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php include 'resources/php/bars.php' ?>
  </head>
  <body>

    <h1>Registreringsformulär<hr></h1> <!-- Använd table eller divar -->
    <form action="registrering.php" method="post">
      <div class="registreringsformulär">
        <h4>
        <label for="">Förnamn: </label><br>
        <input type="text" name="fornamn" value="" placeholder="Skriv ditt förnamn" required><br>
        <label for="">Efternamn: </label><br>
        <input type="text" name="efternamn" value="" placeholder="Skriv ditt efternamn" required><br>
        <label for="">E-mail: </label><br>
        <input type="email" name="email" value="" placeholder="Skriv in din e-post" required><br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="losenord" value="" placeholder="Skriv in ditt lösernord" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <label for="">Adress: </label><br>
        <input type="text" name="adress" value="" placeholder="Skriv in din adress" required><br>
        <label for="">Telefonnummer: </label><br>
        <input type="tel" name="telefonnummer" value="" placeholder="Skriv in ditt telefonnummer" required pattern="[0][7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"><br>
        <label for="">Jag accepterar användarvillkoren: </label>
        <input type="checkbox" value="" name="accept" required> <br><br>
        <input type="submit" value="Registrera" name="regbox">
        </h4>
      </div>
      <hr>
      <h3>
      <div class="kontoFinns">
        <p>Har du ett konto? <a href="login.html">Logga in</a> </p>

      </div>
    </h3>
    </form>

    <?php
    if (!empty($_POST['fornamn'])) {

    $dbServer = "dbtrain.im.uu.se";
    $username = "dbtrain_890";
    $password = "jrylmp";
    $dbname = "dbtrain_890";

    $conn = new mysqli($dbServer, $username, $password, $dbname);

    if (!$conn) {
         die("Det gick inte att ansluta! Error: ". mysqli_connect_error());
    }

    echo "Uppkopplad! <br>";

    mysqli_set_charset($conn,"utf8");

    $fornamn = $_POST['fornamn'];
    $efternamn = $_POST['efternamn'];
    $email = $_POST['email'];
    $losenord = $_POST['losenord'];
    $adress = $_POST['adress'];
    $telefonnummer = $_POST['telefonnummer'];

    $query = "INSERT INTO Users(Fornamn, Efternamn, Email, Losenord, Adress, Telefonnummer) VALUES ('$fornamn', '$efternamn', '$email', '$losenord', '$adress', '$telefonnummer')";

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
