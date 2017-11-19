<?php

 # Init the MySQL Connection
 $mysqli = new mysqli("localhost", "root", "", "casaRural");

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 # Prepare the INSERT Query
  $sql_query = "INSERT INTO Reservas (Nombre, Email, numero, Comentario, Entrada, Salida)
    VALUES ('Antonio', 'antonio.sanz@gmail.com', 3, 'Hola que tal?', STR_TO_DATE('23-11-2017', '%d-%m-%Y'), 
    STR_TO_DATE('26-11-2017', '%d-%m-%Y'))";
 
 # Execute the INSERT Query
  if( !( $insertRes = $mysqli->query($sql_query) ) ){
    printf("Insert of row failed: %s\n", mysqli_connect_error());
    exit();
  }else{
    echo '<p>Person\'s Information Inserted</p>';
  }

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `Reservas`';
 # Execute the SELECT Query
  if( !( $selectRes = $mysqli->query( $selectSQL ) ) ){
    printf("Retrieval of data failed: %s\n", mysqli_connect_error());
    exit();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Nº Personas</th>
      <th>Comentario</th>
      <th>Fecha entrada</th>
      <th>Fecha salida</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['ID']}</td><td>{$row['Nombre']}</td><td>{$row['Email']}</td><td>{$row['numero']}</td>
          <td>{$row['Comentario']}</td><td>{$row['Entrada']}</td><td>{$row['Salida']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }

?>