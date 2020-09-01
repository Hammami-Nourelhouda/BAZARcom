<?php
/*  vider la session pour déconnecter  */
session_start();
$_SESSION=array();
header('location: index.php');
 ?>
