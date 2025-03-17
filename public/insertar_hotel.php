<?php
include 'conexion.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $ubicacion = $_POST['ubicacion'];
    $habitaciones = $_POST['habitaciones'];
    $tarifa = $_POST['tarifa'];

    $sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) 
            VALUES ('$nombre', '$ubicacion', '$habitaciones', '$tarifa')";

    if ($conn->query($sql) === TRUE) {
        // Mensaje de éxito y botón de regreso a la página principal
        echo "<h2>¡Hotel registrado exitosamente!</h2>";
        echo "<button onclick=\"window.location.href='index.php';\">Regresar a la página principal</button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
