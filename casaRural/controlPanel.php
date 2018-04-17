<?php

 # Init the MySQL Connection
  if( !( $db = mysqli_connect( 'localhost' , 'root' , 'genista2', 'casaRural' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysqli_connect_errno().': '.mysqli_connect_error());

  $name = 'antonio';
  $email = 'antonio.sanz@gmail.com';
  $entry = '15/04/2017';
  $exit = '20/04/2017';

  $sql = "INSERT INTO Reservas (Nombre, Email, Numero, Comentario, Entrada, Salida, Telefono)
  VALUES ('Antonio', 'antonio.sanz@gmail.com', 3, 'Ey que pasa!!!', '20170412', '20170414', 657803410)";

  

 # Prepare the INSERT Query
 /* $insertSQL = 'INSERT INTO `Reservas` VALUES( "%s" , "%s" , "%s" , "%s" )';
  $insertSQL = sprintf( $insertTPL ,
                 $db->real_escape_string( $name ) ,
                 $db->real_escape_string( $email ) ,
                 $db->real_escape_string( $entry ) ,
                 $db->real_escape_string( $exit ) );*/

 # Execute the INSERT Query
  if( !( $insertRes = $db->query( $sql) ) ){
    echo '<p>Insert of Row into Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error().'</p>';
  }else{
    echo '<p>Person\'s Information Inserted</p>';
  }

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `Reservas`';
 # Execute the SELECT Query
  if( !( $selectRes = $db->query( $selectSQL) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_connect_errno().': '.mysqli_connect_error();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Fecha entrada</th>
      <th>Fecha salida</th>
      <th>Nº personas</th>
      <th>Telefono</th>
      <th>Comentario</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( $selectRes->num_rows ==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['ID']}</td><td>{$row['Nombre']}</td><td>{$row['Email']}</td><td>{$row['Entrada']}</td>
                <td>{$row['Salida']}</td><td>{$row['Numero']}</td><td>{$row['Telefono']}</td>
                <td>{$row['Comentario']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>

    <?php
        mysqli_close($db);

  }

?>