<!DOCTYPE html>
<?php
  $namnet = "";
  if (isset($_GET["namn"])) {
    $namnet = $_GET["namn"];

    addToDatabase($namnet);
  }
function addToDatabase($namn){

}
 ?>
