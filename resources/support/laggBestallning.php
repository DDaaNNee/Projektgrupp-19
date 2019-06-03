<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<html>
    <body>
        <form action="" method='post'>

        </form>

        <h4>
        <?php
        include 'dbconnect.php';

        $currUser = $_SESSION['user'];

        $hittaLeveransadress = "SELECT Adress FROM Anvandare WHERE Email='$currUser'";
        $queryLeveransadress = mysqli_query($conn, $hittaLeveransadress) or die(mysqli_error($conn));
        $radLeveransadress = mysqli_fetch_row($queryLeveransadress);
        $radLeveransadress = $radLeveransadress[0];

        $hittaProdnamn = "SELECT Produktnamn FROM Kundvagn WHERE UserID='$currUser'";
        $queryProdnamn = mysqli_query($conn, $hittaProdnamn);
        $radProdnamn = mysqli_fetch_row($queryProdnamn);
        $radProdnamn = $radProdnamn[0];

        $hittaUserID = "SELECT UserID FROM Kundvagn WHERE UserID='$currUser'";
        $queryUserID = mysqli_query($conn, $hittaUserID);
        $radUserID = mysqli_fetch_row($queryUserID);
        $radUserID = $radUserID[0];

        /*$hittaPris = "SELECT Pris FROM Anvandare WHERE Email='$currUser'";
        $queryPris = mysqli_query($conn, $hittaPris);
        $radPris = mysqli_fetch_row($queryPris);
        $radPris = $radPris[0];*/

        $hittaProduktNR = "SELECT ProduktNR FROM Kundvagn WHERE UserID='$currUser'";
        $queryProduktNR = mysqli_query($conn, $hittaProduktNR);
        $radProduktNR = mysqli_fetch_row($queryProduktNR);
        $radProduktNR = $radProduktNR[0];

        if (!empty($radLeveransadress) || $radLeveransadress != '') {
          $queryKundvagn = "SELECT * FROM Kundvagn WHERE UserID = '$currUser'";
          $result = $conn->query($queryKundvagn);
          if ($result->num_rows > 0) {
            $queryBestall = "INSERT INTO Bestallning(AnvandarID, ProduktNR, Leveransadress) VALUES ('$radUserID', '$radProduktNR', '$radLeveransadress')";
          }
        }
        ?>

    </body>

</html>
