<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <div class="produktbarpaket">
        <label for="">Sportpaket</label>
        <input type="text" name="sportpaket" value="">
      </div>
      <div class="produktbarpaket">
        <label for="">Extremepaket</label>
        <input type="text" name="sportpaket" value="">
      </div>
      <div class="produktbarpaket">
        <label for="">Gamingpaket</label>
        <input type="text" name="sportpaket" value="">
      </div>
    </form>

    <hr>
    <?php
    echo basename(__FILE__);
    if (basename(__FILE__) == 'sportpaket.php') {

    }
    else if(basename(__FILE__) == 'extremepaket.php'){

    }
    else if (basename(__FILE__) == 'gamingpaket.php') {

    }
    ?>
  </body>
</html>
