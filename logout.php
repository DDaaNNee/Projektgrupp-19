<?php
include 'resources/support/checksession.php';
session_destroy();
header('Location: login.php');
?>
