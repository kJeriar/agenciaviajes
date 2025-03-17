<?php
include 'conexion.php'; // Conectar a la base de datos

// Consulta para obtener todas las reservas
$sql = "SELECT r.id_reserva, r.fecha_reserva, v.origen, v.destino, h.nombre AS hotel, r.id_cliente 
        FROM RESERVA r
        JOIN VUELO v ON r.id_vuelo = v.id_vuelo
        JOIN HOTEL h ON r.id_hotel = h.id_hotel";
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    echo "<h2>Reservas Actuales</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID Reserva</th>
                <th>Fecha de Reserva</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Hotel</th>
                <th>ID Cliente</th>
            </tr>";
    
    // Mostrar las filas de resultados
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_reserva"] . "</td>
                <td>" . $row["fecha_reserva"] . "</td>
                <td>" . $row["origen"] . "</td>
                <td>" . $row["destino"] . "</td>
                <td>" . $row["hotel"] . "</td>
                <td>" . $row["id_cliente"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron reservas.";
}

$conn->close();
?>
