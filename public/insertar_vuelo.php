<?php
include 'conexion.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $plazas = $_POST['plazas'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) 
            VALUES ('$origen', '$destino', '$fecha', '$plazas', '$precio')";

    if ($conn->query($sql) === TRUE) {
        // Mensaje de éxito y botón de regreso a la página principal
        echo "<h2>¡Vuelo registrado exitosamente!</h2>";
        echo "<button onclick=\"window.location.href='index.php';\">Regresar a la página principal</button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

