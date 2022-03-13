<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Verificando Conexión
if($link === false){
    die("ERROR: No se pudo hacer la conexión. " . mysqli_connect_error());
}
 
// Mostrar conexión exitosa
echo "Conexión exitosa desde MySQLi Procedimientos. Información del Hosting: " . mysqli_get_host_info($link);

// Cierre de Conexión
mysqli_close($link);
echo "</p></p></p> En esta instancia se ha cerrado la conexión de la base de datos con MySQLi en línea de procedimientos"

?>