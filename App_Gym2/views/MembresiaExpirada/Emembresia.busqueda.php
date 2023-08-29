<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$buscar = $_GET['buscar']; 

$query = "SELECT 	men_id, cli_cedula, tipo_menbresia, men_fecha_inicio, men_fecha_fin, men_estado 
          FROM membresia 
          INNER JOIN cliente ON membresia.cliente_id = cliente.cliente_id 
          INNER JOIN tipo_menbresia ON membresia.tipo_id = tipo_menbresia.tipo_id 
          WHERE (cliente.cli_cedula LIKE '%$buscar%' OR tipo_menbresia.tipo_menbresia LIKE '%$buscar%') AND men_estado='Expirado'";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$contador = 1; 

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $contador . "</td>"; 
echo "<td>" . $row['cli_cedula'] . "</td>";
echo "<td>" . $row['tipo_menbresia'] . "</td>";
echo "<td>" . $row['men_fecha_inicio'] . "</td>";
echo "<td>" . $row['men_fecha_fin'] . "</td>";
echo "<td>" . $row['men_estado'] . "</td>";
echo "<td>";
echo "<button class='btn btn-danger' onclick='eliminar(" . $row['men_id'] . ")'>Eliminar</button>";
echo "</td>";
echo "</tr>";
        $contador++; 
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}

mysqli_close($mysqli);

?>