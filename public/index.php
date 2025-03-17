<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Agencia de Viajes</title>
    <link rel="stylesheet" href="styles.css">
    
    <script>
        // Validación de formulario de vuelo
        function validarVuelo() {
            var origen = document.getElementById('origen').value;
            var destino = document.getElementById('destino').value;
            var fecha = document.getElementById('fecha').value;
            var plazas = document.getElementById('plazas').value;
            var precio = document.getElementById('precio').value;
            
            if (origen == "" || destino == "" || fecha == "" || plazas == "" || precio == "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
            return true;
        }

        // Validación de formulario de hotel
        function validarHotel() {
            var nombre = document.getElementById('nombre').value;
            var ubicacion = document.getElementById('ubicacion').value;
            var habitaciones = document.getElementById('habitaciones').value;
            var tarifa = document.getElementById('tarifa').value;

            if (nombre == "" || ubicacion == "" || habitaciones == "" || tarifa == "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<h1>Bienvenido a la Agencia de Viajes</h1>
    
    <!-- Enlace a la página de consulta de reservas -->
    <a href="consulta_reservas.php">Consulta de Reservas</a>
<h1>Formulario de Vuelo</h1>
<form action="insertar_vuelo.php" method="post" onsubmit="return validarVuelo()">
    <label for="origen">Origen:</label><br>
    <input type="text" id="origen" name="origen"><br><br>

    <label for="destino">Destino:</label><br>
    <input type="text" id="destino" name="destino"><br><br>

    <label for="fecha">Fecha:</label><br>
    <input type="date" id="fecha" name="fecha"><br><br>

    <label for="plazas">Plazas Disponibles:</label><br>
    <input type="number" id="plazas" name="plazas"><br><br>

    <label for="precio">Precio:</label><br>
    <input type="number" step="0.01" id="precio" name="precio"><br><br>

    <input type="submit" value="Registrar Vuelo">
</form>

<h1>Formulario de Hotel</h1>
<form action="insertar_hotel.php" method="post" onsubmit="return validarHotel()">
    <label for="nombre">Nombre del Hotel:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="ubicacion">Ubicación:</label><br>
    <input type="text" id="ubicacion" name="ubicacion"><br><br>

    <label for="habitaciones">Habitaciones Disponibles:</label><br>
    <input type="number" id="habitaciones" name="habitaciones"><br><br>

    <label for="tarifa">Tarifa por Noche:</label><br>
    <input type="number" step="0.01" id="tarifa" name="tarifa"><br><br>

    <input type="submit" value="Registrar Hotel">
</form>

</body>
</html>
