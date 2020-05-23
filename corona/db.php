<?php
// Opens a connection to a MySQL server.
$connection=mysqli_connect ('sql300.epizy.com', 'epiz_25773670', 'HfQjknEtxAXP','epiz_25773670_demo');
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/