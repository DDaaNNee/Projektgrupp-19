<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
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

    <h5>
    <?php
    $dbServer = "dbtrain.im.uu.se";
    $username = "dbtrain_890";
    $password = "jrylmp";
    $dbname = "dbtrain_890";


    $conn = new mysqli($dbServer, $username, $password, $dbname) or die
    ("Något gick fel: ". $conn -> error);

    $sql = "SELECT ID, Fornamn, Efternamn, Email, Telefonnummer FROM Users";
    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
      while ($row = $result -> fetch_assoc()) {
        echo "<table border='1'>";
        echo "<tr><td>ID</td><td>Förnamn</td><td>Efternamn</td><td>E-mail</td><td>Telefonnummer</td><tr>\n";
        echo "<tr><td>{$row["ID"]}</td><td>{$row["Fornamn"]}</td><td>{$row["Efternamn"]}</td><td>{$row["Email"]}</td><td>{$row["Telefonnummer"]}</td><tr>";
      }
    }
    else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
  </h5>
  </body>
</html>
