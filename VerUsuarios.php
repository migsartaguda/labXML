<?php


	//conexion remota

	//$mysqli = mysqli_connect("mysql.hostinger.es","u102281824_migel","miguel3", "u102281824_sw" ) or die(mysql_error());
	
	//conexion local
	
	$mysqli = mysqli_connect("localhost", "root","","usuario") or die (mysql_error());
	

		


		if (!$mysqli) {
	 
			echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;

		}

	$usuarios = mysqli_query($mysqli, "select * from usuario" ) or die( mysql_error() );

		echo '<table border=1> <tr> 
		<th> Nombre </th>
		<th> Apellidos </th>
		<th> Nickname </th>
		<th> Email </th>		
		<th> Telefono </th>
		<th> Sexo </th>
		<th> Especialidad </th>
		</tr>';

			
		while( $row = mysqli_fetch_array($usuarios) ){
			echo '<tr>
					  <td>'.$row['Nombre'].'</td>
					  <td>'.$row['Apellidos'].'</td>
					  <td>'.$row['Nickname'].'</td>
					  <td>'.$row['Email'].'</td>
					  <td>'.$row['Telefono'].'</td>
					  <td>'.$row['Sexo'].'</td>
					  <td>'.$row['Especialidad'].'</td>
				 </tr>';
			
		}
		echo '</table>';

		mysqli_close( $mysqli );
	
?>