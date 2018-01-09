<?php

$db['hostname'] = "localhost";
$db['username'] = "root";
$db['password'] = "";
$db['database'] = "agallery";

$con = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']) or die ("could not connect to mysql");

if(mysqli_connect_error())
{
	echo "Failed to connect MYSQL" . mysqli_connect_error();
}
?>