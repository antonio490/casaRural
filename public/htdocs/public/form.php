<?php

require('connection.php');

$name_err = $email_err = $num_err = $dateIn_err = $dateOut_err = "";

// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST['btnSubmit'])){

 
// Escape user inputs for security
$name = mysqli_real_escape_string($connection, $_REQUEST['name']);
$email = mysqli_real_escape_string($connection, $_REQUEST['email']);
$num = mysqli_real_escape_string($connection, $_REQUEST['personas']);
$dateIn = mysqli_real_escape_string($connection, $_REQUEST['date_in']);
$dateOut = mysqli_real_escape_string($connection, $_REQUEST['date_out']);
$comment = mysqli_real_escape_string($connection, $_REQUEST['comments']);



  $sql = "INSERT INTO Reservas (Nombre, Email, numero, Comentario, Entrada, Salida)
  VALUES ('$name', '$email', '$num', '$comment', '$dateIn', '$dateOut')";


 # Execute the INSERT Query
  if( !( $insertRes = $connection->query( $sql) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error().'</p>';
  }else{
    echo '';
  }

}

?>