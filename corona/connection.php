<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("sql300.epizy.com","epiz_25773670","HfQjknEtxAXP") 
            or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("epiz_25773670_demo",$conn);
*/
 
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 
$databaseHost = 'sql300.epizy.com';
$databaseName = 'epiz_25773670_demo';
$databaseUsername = 'epiz_25773670';
$databasePassword = 'HfQjknEtxAXP';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>