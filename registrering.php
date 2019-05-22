<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registreringsformulär</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    <?php
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

    header('Location: index.php');
     ?>
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

      <h1>Registreringsformulär</h1> <!-- Använd table eller divar -->
      <form action="registrering.php" method="post">
        <h3>Förnamn: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="fornamn"></h3>
        <h3>Efternamn: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="efternamn"></h3>
        <h3>E-mail: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="text" name="email"/></h3>
        <h3>Telefonnummer: &#160;&#160;&#160;<input type="text" name="mobilnummer"></h3>
        <h3><input type="submit" value="submit" name="submit"></h3>
      </form>

        <script>
          function kolla(){
            if(document.form1.förnamn.value == "" || document.form1.efternamn.value == "" || document.form1.email.value == "" || document.form1.mobilnummer.value == ""){
              alert("Fyll i alla fält!");
            }
            else{
              document.form1.submit();
            }
          }

        </script>
  </body>
</html>
