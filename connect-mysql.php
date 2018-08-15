<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "c3spp";

$objCon = mysqli_connect($serverName,$username,$password,$dbName);

mysqli_set_charset($objCon,"utf8");

?>