<?php

require('connection.php');

$name_err = $email_err = $num_err = $dateIn_err = $dateOut_err = "";

// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//if(isset($_POST['btnSubmit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$num = $_POST['personas'];
	$comment = $_POST['comment'];
	$dateIn = $_POST['date_in'];
	$dateOut = $_POST['date_out'];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



  $sql = "INSERT INTO Reservas (Nombre, Email, numero, Comentario, Entrada, Salida)
  VALUES ('$name', '$email', '$num', '$comment', '$dateIn', '$dateOut')";

//  VALUES('antonio', 'antonio@prueba.com', '4', 'hola', 20170403, 20170406)";

 # Execute the INSERT Query
  if( !( $insertRes = $connection->query( $sql) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error().'</p>';
  }else{
    echo 'gracias su reserva será confirmada en los próximos días';
  }

//}

?>