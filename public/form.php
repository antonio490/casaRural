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

 # Email aviso de reserva
  	$to = "asc490@hotmail.com";
	$subject = "Casa rural 1786";

	$message = "
	<html>
	<head>
	<title>Reserva Casa Rural 1786</title>
	</head>
	<body>
	<p>Se ha realizado una nueva reserva!!</p>
	<table>
	<tr>
	<th>Firstname</th>
	<th>Email</th>
	<th>Fecha de entrada</th>
	<th>Fecha de salida</th>
	<th>Número de personas</th>
	<th>Comentario</th>
	</tr>
	<tr>
	<td>". $name ."</td>
	<td>". $email ."</td>
    <td>". $dateIn ."</td>
	<td>". $dateOut ."</td>
	<td>". $num ."</td>
	<td>". $comment ."</td>
	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: ' . "\r\n";

	mail($to,$subject,$message,$headers);

 # Execute the INSERT Query
  if( !( $insertRes = $connection->query( $sql) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error().'</p>';
  }else{
    //echo 'gracias por hacer su reserva';
    //usleep(3000000);
    //header("Location: index.php");
    echo '<script language="javascript">';
	echo 'alert("Gracias por su reserva!, pronto le confirmaremos disponibilidad")';
	echo '</script>';
	echo "<script>setTimeout(\"location.href = 'http://localhost/public/index.php';\", 10);</script>";
  }

//}

?>