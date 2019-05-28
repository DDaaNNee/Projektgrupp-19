<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Home </title>
  <link rel="stylesheet" href="resources/css/mastercss.css">
  <link rel="stylesheet" href="resources/css/bars.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <?php include 'resources/support/bars.php'?>

</head>
<body>

<h1><b>Välkommen till ENRGbolaget!</b></h1>
<h2><b>Din största återförsäljare av energidryck online!    <hr></b></h2>

<!--<script> /*Kommenterad pga att slippa trycka OK under utvecklingsfasen**/
if (confirm('Är du över 15 år gammal?')) {
<input type="date">

}
else {
    window.location = "http://google.com"
}
</script> -->
<?php include 'resources/support/slideshow.php' ?>
<hr>
</body>
 </html>
