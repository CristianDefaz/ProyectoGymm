<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
   
        <?php
        $mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

        if (!$mysqli) {
            die("Error en la conexión: " . mysqli_connect_error());
        }

        $buscar = $_GET['buscar']; 

        $query = "SELECT *
        FROM recibos_membresia AS r
        INNER JOIN cliente AS c ON r.cli_id = c.cliente_id
        INNER JOIN tipo_menbresia AS tm ON r.men_id = tm.tipo_id
        WHERE (r.estado Like '%$buscar%' or c.cli_cedula like '%$buscar%' or c.cli_apellido like '%$buscar%')";

        $result = mysqli_query($mysqli, $query);

        if (!$result) {
            die("Error en la consulta: " . mysqli_error($mysqli));
        }

        $contador = 1; 

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $contador . "</td>"; 
                echo "<td>" . $row['cli_cedula'] ." - ".$row['cli_nombre']." ".$row['cli_apellido']. "</td>";
                echo "<td>" . $row['fa_fecha'] . "</td>";
                echo "<td>" . $row['tipo_menbresia'] . "</td>";
                echo "<td>" . $row['tipo_costo'] . "</td>";
                // Agrega el enlace para abrir el modal
                echo "<td><a href='#' onclick=\"mostrarModal('" . $row['imagen'] . "')\"><img src='" . $row['imagen'] . "' width='100'></a></td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>";
                echo "<button class='btn btn-success' onclick='uno(" . $row['id_recibo'] . ")'>Editar</button>";
                echo "<button class='btn btn-danger' onclick='eliminar(" . $row['id_recibo'] . ")'>Eliminar</button>";
                echo "</td>";
                echo "</tr>";
                $contador++; 
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron resultados</td></tr>";
        }

        mysqli_close($mysqli);
        ?>
    
    
    <!-- Modal -->
    <div id="imageModal" class="modal">
        <div class="modal-content" style="display: flex; justify-content: center; align-items: center; height: 100%;">
            <img id="modalImage" src="" alt="Imagen" style="max-width: 100%; max-height: 80vh;">
            <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Cerrar Imagen</button>
        </div>
    </div>
    <script>
    // Obtén la fecha actual en el formato YYYY-MM-DD
    var fechaActual = new Date().toISOString().split('T')[0];
    
    // Asigna la fecha actual al campo de entrada de fecha
    document.getElementById('fa_fecha').value = fechaActual;
</script>
    
    <script src="./recibom.js"></script>
</body>
</html>