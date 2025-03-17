<?php
$servername = "localhost"; // Servidor de la base de datos
$username = "root";        // Nombre de usuario de MySQL
$password = "root";        // Contraseña de MySQL (la predeterminada en MAMP es 'root')
$dbname = "AGENCIA";       // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
