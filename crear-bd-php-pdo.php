<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
try{
    $pdo = new PDO("mysql:host=localhost;", "root", "");
    // Mostrando errores de conexión PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: No se pudo establecer la conexión. " . $e->getMessage());
}
 
// Ejecutando la consulta de creación de la base de datos
try{
    $sql = "CREATE DATABASE demo";
    $pdo->exec($sql);
    echo "Base de datos creada exitósamente";
} catch(PDOException $e){
    die("ERROR: No se pudo executar la consulta $sql. " . $e->getMessage());
}
 
// Cierre de la conexión
unset($pdo);
?>