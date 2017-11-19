<?php

  require('connection.php');


  $sql = "INSERT INTO Reservas (Nombre, Email, Numero, Comentario, Entrada, Salida)
  VALUES ('Antonio', 'antonio.sanz@gmail.com', 3, 'Ey que pasa!!!', '20170412', '20170414')";

  

 # Prepare the INSERT Query
 /* $insertSQL = 'INSERT INTO `Reservas` VALUES( "%s" , "%s" , "%s" , "%s" )';
  $insertSQL = sprintf( $insertTPL ,
                 $db->real_escape_string( $name ) ,
                 $db->real_escape_string( $email ) ,
                 $db->real_escape_string( $entry ) ,
                 $db->real_escape_string( $exit ) );*/

 # Execute the INSERT Query
  if( !( $insertRes = $connection->query( $sql) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error().'</p>';
  }else{
    echo '';
  }

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `Reservas`';
 # Execute the SELECT Query
  if( !( $selectRes = $connection->query( $selectSQL) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error();
  }else{
  ?>

<!DOCTYPE html>
<html>
<head>
<title>Casa rural 1786</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
</head>
<body>
<div id="container">
    
    <header id="header">
      <h1>Casa rural 1786</h1>
      <!--<a href="index.html" class="btn">Inicio</a>-->
      <a href="casa.html" class="btn">Nuestra casa</a>
      <a href="casa-fotos.html" class="btn">Galería</a>
      <!--<a href="localizacion.html" class="btn">Localización</a>-->
      <a href="reserva.html" class="btnExtra">Reserva</a>
      <a href="entorno.html" class="btnExtra">Entorno</a>
      
      <!--<a href="#middle" class="btnExtra">Historia</a>-->
    <!--  <a href="admin.html" class="btnAdmin">Administrador</a>-->
    </header>

  <hr id="hr">

<table class="tarifas" border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Fecha entrada</th>
      <th>Fecha salida</th>
      <th>Nº personas</th>
      <th>Comentario</th>
      <th></th>

    </tr>
  </thead>
  <tbody>
    <?php
      if( $selectRes->num_rows ==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){

          $id = $row['ID'];
          echo "<tr><td>{$row['ID']}</td><td>{$row['Nombre']}</td><td>{$row['Email']}</td><td>{$row['Entrada']}</td>
                <td>{$row['Salida']}</td><td>{$row['numero']}</td>
                <td>{$row['Comentario']}</td><td><button id='$id'>Eliminar</button></td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>

    <?php
        mysqli_close($connection);

  }

?>

</div>
</body>
</html>