<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$buscar = $_GET['buscar'];

$query = "SELECT * FROM `cliente` WHERE (cli_cedula LIKE '%$buscar%' OR cli_apellido LIKE '%$buscar%')";

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
        echo "<td>" . $row['cli_nombre'] . "</td>";
        echo "<td>" . $row['cli_apellido'] . "</td>";
        echo "<td>" . $row['cli_fecha_nacimiento'] . "</td>";
        echo "<td>" . $row['cli_genero'] . "</td>";
        echo "<td>" . $row['cli_altura'] . "</td>";
        echo "<td>" . $row['cli_peso'] . "</td>";
        echo "<td>" . $row['cli_telefono'] . "</td>";
        echo "<td>" . $row['cli_direccion'] . "</td>";
        echo "<td>" . $row['cli_email'] . "</td>";
        echo "<td>";
        echo "<button class='btn btn-success' onclick='uno(" . $row['cliente_id'] . ")'>Editar</button>";
        echo "<button class='btn btn-danger' onclick='eliminar(" . $row['cliente_id'] . ")'>Eliminar</button>";
        echo "</td>";
        echo "</tr>";
        $contador++;
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}

mysqli_close($mysqli);
