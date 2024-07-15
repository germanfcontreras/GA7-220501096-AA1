<?php
	$usuario = "root";
	$clave = "";
	$servidor = "localhost";
	$basededatos = "TiendaAbarrotes";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $clave, $basededatos );

	// Revisar conexion
    if ($conexion->connect_error) {
                                   die("Conexón fallida: " . $conn->connect_error);
                                  }
    echo "Conexion Exitosa <br>"; 
   
    // Esta línea le pide a la base muestra los acentos o tildes
    mysqli_set_charset($conexion,"utf8");

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM cliente";
	
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
 
    // Guarda la consulta
    $resultado = mysqli_query ($conexion,$query);
   
    // Muestra toda la tabla que se consulta
    while(($fila=mysqli_fetch_row($resultado))==true)
      {  
   	   echo $fila[0]." ";
	   echo $fila[1]." ";
	   echo $fila[2]." ";
	   echo $fila[3]." ";
       echo $fila[4]." ";
	   echo "<br>";
	  }
	

	mysqli_close( $conexion );
?>