<?php
error_reporting(0);
$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$buscar = $_GET['buscar'];

$query = "(SELECT detalle, cli_nombre, usuario, em_nombre, nom_tabla, operacion_tabla FROM auditoria WHERE em_nombre LIKE '%$buscar%' OR nom_tabla LIKE '%$buscar%')
          UNION
          (SELECT detalle, cli_nombre, usuario, em_nombre, nom_tabla, operacion_tabla FROM auditoria2 WHERE em_nombre LIKE '%$buscar%' OR nom_tabla LIKE '%$buscar%')";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$contador = 1;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $row['detalle'] . "</td>";
        echo "<td>" . $row['cli_nombre'] ." ".$row['cli_apellido'] . "</td>";
       
        echo "<td>" . $row['usuario'] . "</td>";
        echo "<td>" . $row['em_nombre'] . "</td>";
        echo "<td>" . $row['nom_tabla'] . "</td>";
        echo "<td>" . $row['operacion_tabla'] . "</td>";
        
        echo "</tr>";
        $contador++;
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}

mysqli_close($mysqli);
