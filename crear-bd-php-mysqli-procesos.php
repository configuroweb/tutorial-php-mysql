<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
$link = mysqli_connect("localhost", "root", "");
 
// Verificando Conexión
if($link === false){
    die("ERROR: No se pudo hacer la conexión. " . mysqli_connect_error());
}
 
// Creación de la base de datos
$sql = "CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
    echo "Base de Datos Creada Exitósamente";
} else{
    echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($link);
}
 
// Cierre de la conexión
mysqli_close($link);
?>