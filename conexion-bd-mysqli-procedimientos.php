<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Verificando Conexión
if($link === false){
    die("ERROR: No se pudo hacer la conexión. " . mysqli_connect_error());
}
 
// Mostrar conexión exitosa
echo "Conexión exitosa desde MySQLi Procedimientos. Información del host: " . mysqli_get_host_info($link);
?>