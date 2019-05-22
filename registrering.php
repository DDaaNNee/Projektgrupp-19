<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registreringsformulär</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <div id="topbar">
    </div>
    <div id="navbar">
    </div>

    <script>
    $(function(){
      $("#topbar").load("resources/htmlsupport/topbar.html");
    });
    $(function(){
      $("#navbar").load("resources/htmlsupport/navbar.html");
    });
    </script>

    <h1>Registreringsformulär<hr></h1> <!-- Använd table eller divar -->
    <form action="registrering.php" method="post">
      <div class="registreringsformulär">
        <h4>
        <label for="">Förnamn: </label><br>
        <input type="text" name="test" value="" placeholder="Skriv ditt förnamn" required><br>
        <label for="">Efternamn: </label><br>
        <input type="text" name="test" value="" placeholder="Skriv ditt efternamn" required><br>
        <label for="">E-mail: </label><br>
        <input type="email" name="test" value="" placeholder="Skriv in din e-post" required><br>
        <label for="">Lösenord: </label><br>
        <input type="password" name="test" value="" placeholder="Skriv in ditt lösernord" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> <br>
        <label for="">Adress: </label><br>
        <input type="text" name="test" value="" placeholder="Skriv in din adress" required><br>
        <label for="">Telefonnummer: </label><br>
        <input type="tel" name="test" value="" placeholder="Skriv in ditt telefonnummer" required pattern="[0][7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"><br>
        <label for="">Jag accepterar användarvillkoren: </label>
        <input type="checkbox" value="" name="accept" required> <br><br>
        <input type="submit" value="Registrera" name="test">
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

    $fornamn = $_POST['fornamn'];
    $efternamn = $_POST['efternamn'];
    $email = $_POST['email'];
    $telefonnummer = $_POST['mobilnummer'];

    $query = "INSERT INTO Users(Fornamn, Efternamn, Email, Telefonnummer) VALUES ('$fornamn', '$efternamn', '$email', '$telefonnummer')";

      if (mysqli_query($conn, $query)) {
          echo "Adderad information till databasen! <br>";
      }
      else {
          echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
      }
    mysqli_close($conn);
  }

     ?>
        <script>
          function kolla(){
            if(document.form1.förnamn.value == "" || document.form1.efternamn.value == "" || document.form1.email.value == "" || document.form1.mobilnummer.value == ""){
            }
            else{
              document.form1.submit();
            }
          }

        </script>
  </body>
</html>
