<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/Projektgrupp19/resources/support/checksession.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="ikon">
      <a href="../../index.php">
        <img src="../../resources/img/ENRG-TRANSP.png" alt="Home">
      </a>
    </div>

    <div class="sökruta">
      <input type="text" placeholder="Sök...">
      <input type="submit" name="Sök" value="Sök">
    </div>

    <?php if (isset($_SESSION['inloggad']) && $_SESSION['inloggad'] == true){
            echo "<div class='mittkonto'>
            <a href='../../minsida.php'>
              <img src='../../resources/img/mittkonto.png' alt='Mitt konto'>
            </a>
          </div>";
        }
        else {
          echo "<div class='mittkonto'>
          <a href='../../login.php'>
            <img src='../../resources/img/mittkonto.png' alt='Mitt konto'>
          </a>
        </div>";
        }

    ?>

    <div class="kundvagn">
      <a href="../../kundvagn.php">
        <img src="../../resources/img/cart.png" alt="Kundvagn">
      </a>
    </div>

    <div class="karta">
    <a href="../../leaflet.php">
    </a>
    </div>
  </body>
</html>
