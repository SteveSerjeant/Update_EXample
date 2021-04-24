<?php

define ('dbServerName', 'proj-mysql.uopnet.plymouth.ac.uk');
define ('dbUsername','COMP2003_C');
define ('dbPassword','VbeT113+');
define('dbName','COMP2003_C');

$conn = mysqli_connect(dbServerName, dbUsername,dbPassword,dbName);

if ($conn === false){

    die ("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
