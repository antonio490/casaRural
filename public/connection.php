<?php
//$connection = mysqli_connect('mysql.hostinger.es', 'u878925327_casa', 'genista2');
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'casaRural'); //u878925327_casar
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>