<?php

 # Init the MySQL Connection
 $mysqli = new mysqli("localhost", "root", "", "casaRural");

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>