<?php
//Ejercicios 3 3ra Forma PDO
//Crear una carpeta con el siguiente nombre: 3_pdo, y los siguientes archivos descritos.
//config.php
/* Credenciales de la base de datos. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Practica_3_MCQ');
/* Conexión a la base de datos MySQL */
try{
$pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
// Establecer el modo de error PDO en excepción
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
die("ERROR: No se pudo conectar. " . $e->getMessage());
}
?>
