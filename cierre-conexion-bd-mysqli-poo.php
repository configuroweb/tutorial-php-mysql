<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Verificando Conexión
if($mysqli === false){
    die("ERROR: No se pudo hacer la conexión. " . $mysqli->connect_error);
}
 
// Mostrar conexión exitosa
echo "Conexión exitosa desde MySQL con POO: " . $mysqli->host_info;

// Cerrar conexión
$mysqli->close();

echo "</p></p></p> En esta instancia se ha cerrado la conexión de la base de datos con MySQLi con POO"
?>