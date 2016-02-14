<?php

$db_host= "127.0.0.1:8080/phpmyadmin/";
$db_username= "root";
$db_pass= "";
$db_name= "pharmacy_inventory";

 @mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
 @mysql_select_db ("$db_name") or die ("No database");

 //echo "Succesful connection";

?>
