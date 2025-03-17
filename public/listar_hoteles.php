<?php
include('includes/conexion.php');

$sql = "SELECT * FROM HOTEL";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Hoteles</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>Lista de Hoteles Disponibles</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Ubicación</th><th>Habitaciones Disponibles</th><th>Tarifa por Noche</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['ubicacion'] . "</td>";
            echo "<td>" . $row['habitaciones_disponibles'] . "</td>";
            echo "<td>" . $row['tarifa_noche'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay hoteles registrados.</p>";
    }
    ?>
</div>

</body>
</html>
