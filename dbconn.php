<?php
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$connect=mysql_connect($dbserver,$dbusername,$dbpassword);
if(!$connect){
	die("could not connect to the db".mysql_error());
	
}

?>