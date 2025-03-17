
<?php
include('includes/conexion.php');

$sql = "SELECT * FROM VUELO";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vuelos</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>Lista de Vuelos Disponibles</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Origen</th><th>Destino</th><th>Fecha</th><th>Plazas Disponibles</th><th>Precio</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['origen'] . "</td>";
            echo "<td>" . $row['destino'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<td>" . $row['plazas_disponibles'] . "</td>";
            echo "<td>" . $row['precio'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay vuelos registrados.</p>";
    }
    ?>
</div>

</body>
</html>
