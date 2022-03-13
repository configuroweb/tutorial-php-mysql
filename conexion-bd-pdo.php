<?php
/* Intento de conexión al servidor MySQL. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "",);
    
    // Establecer el modo de error PDO en excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mostrar conexión exitosa
    echo "Conexión exitosa. Información del Host: " . 
$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch(PDOException $e){
    die("ERROR: No pudo conectar. " . $e->getMessage());
}
?>