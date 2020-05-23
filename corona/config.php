<?php
ob_start(); //Turns on output buffering 

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("sql300.epizy.com", "epiz_25773670", "", "feedback"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>