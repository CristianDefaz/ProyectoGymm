<?php

$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$buscar = $_GET['buscar'];

$query = "SELECT * FROM empleado  INNER JOIN rol on empleado.rol_id = rol.rol_id WHERE (em_cedula LIKE '%$buscar%' OR em_apellido LIKE '%$buscar%')";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$contador = 1;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $row['em_cedula'] . "</td>";
        echo "<td>" . $row['em_nombre'] . "</td>";
        echo "<td>" . $row['em_apellido'] . "</td>";
        echo "<td>" . $row['em_telefono'] . "</td>";
        echo "<td>" . $row['em_correo'] . "</td>";
        echo "<td>" . $row['rol_nombre'] . "</td>";
        echo "<td>";
        echo "<button class='btn btn-success' onclick='uno(" . $row['em_id'] . ")'>Editar</button>";
        echo "<button class='btn btn-danger' onclick='eliminar(" . $row['em_id'] . ")'>Eliminar</button>";
        echo "</td>";
        echo "</tr>";
        $contador++;
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
}

mysqli_close($mysqli);
