<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Home </title>
  <link rel="stylesheet" href="resources/css/mastercss.css">
  <link rel="stylesheet" href="resources/css/bars.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <?php include 'resources/support/bars.php'?>
</head>
<body>

<h1><b>Välkommen till ENRGbolaget!</b></h1>
<h2><b>Din största återförsäljare av energidryck online!<hr></b></h2>

<?php include 'resources/support/slideshow.php' ?>
<hr>
<?php include 'resources/support/leaflet.php' ?>
</body>
 </html>
