<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
$mysqli = new mysqli("localhost", "root", "");
 
// Verificando Conexión
if($mysqli === false){
    die("ERROR: No se pudo conectar. " . $mysqli->connect_error);
}
 
// Creación de la base de datos
$sql = "CREATE DATABASE demo";
if($mysqli->query($sql) === true){
    echo "Base de datos creada exitósamente";
} else{
    echo "ERROR: No se pudo ejecutar $sql. " . $mysqli->error;
}
 
// Cierre de la conexión
$mysqli->close();
?>