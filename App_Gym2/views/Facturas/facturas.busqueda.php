<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$buscar = $_GET['buscar']; 

$query = "SELECT * FROM facturas INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id 
INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id INNER JOIN 
empleado ON facturas.id_empleado = empleado.em_id 
WHERE (cli_cedula LIKE '%$buscar%' OR cli_apellido LIKE '%$buscar%' OR tipo_menbresia LIKE '%$buscar%') ";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$contador = 1; 

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
echo "<td>" . $contador . "</td>"; 
echo "<td>" . $row['cli_cedula'] ." - ". $row['cli_nombre'] ." ". $row['cli_apellido'] ."</td>";
echo "<td>" . $row['fa_fecha'] . "</td>";
echo "<td>" . $row['tipo_menbresia'] . "</td>";
echo "<td>" . $row['fa_montol_total'] . "</td>";
echo "<td>";
echo "<button class='btn btn-success' onclick='uno(" . $row['factura_id'] . ")'>Editar</button>";
echo "<button class='btn btn-danger' onclick='eliminar(" . $row['factura_id'] . ")'>Eliminar</button>";
echo "<a class='btn btn-info' href='imprimir.php?id=" . $row['factura_id'] . "' target='_blank'>Imprimir Factura</a>";
echo "</td>";
echo "</tr>";
        $contador++; 
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}
?>

<?php


mysqli_close($mysqli);

function calcularTiempoRestante($fechaFin) {
    $fechaActual = new DateTime();
    $fechaFin = new DateTime($fechaFin);
    $intervalo = $fechaActual->diff($fechaFin);

    $tiempoRestante = $intervalo->format('%a días, %h horas, %i minutos, %s segundos');
    return $tiempoRestante;
}
?>