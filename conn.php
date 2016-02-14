<?php
error_reporting(E_ALL);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dberror1 = "Could not connect";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die ($dberror1);

mysqli_select_db($conn, "pharmacy_inventory");

?>
