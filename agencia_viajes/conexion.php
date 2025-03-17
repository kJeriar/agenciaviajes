<?php
$servername = "localhost"; // Nombre del servidor, usualmente "localhost"
$username = "root";        // Nombre de usuario en MySQL (por defecto en XAMPP es "root")
$password = "";            // Contraseña de MySQL (en XAMPP por defecto está vacía)
$dbname = "AGENCIA";       // Nombre de la base de datos que vas a usar

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error); // Si hay error, lo muestra
} else {
    echo "Conexión exitosa a la base de datos AGENCIA"; // Si la conexión es exitosa
}
?>
