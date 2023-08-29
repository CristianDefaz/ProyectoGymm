<?php
$cli_id = $_POST['cli_id'];
$men_id = $_POST['men_id'];
$men_fecha_inicio = $_POST['men_fecha_inicio'];
$estado = $_POST['estado'];

$cli_id = $_POST['cli_id'];
// Crear un objeto DateTime a partir de la fecha de inicio
$fecha_inicio = new DateTime($men_fecha_inicio);

// Clonar la fecha de inicio para evitar modificarla directamente
$fecha_fin = clone $fecha_inicio;

// Realizar los cálculos según el valor de men_id
switch ($men_id) {
    case 3:
        $fecha_fin->modify('+1 month');
        break;
    case 4:
        $fecha_fin->modify('+6 months');
        break;
    case 5:
        $fecha_fin->modify('+1 year');
        break;
    case 6:
        $fecha_fin->modify('+1 minute');
        break;
    default:
        // En caso de men_id desconocido, muestra un mensaje de error
        echo "men_id no válido.";
        exit;
}

// Formatea las fechas en el formato deseado (yyyy-mm-dd hh:mm:ss)
$men_fecha_inicio = $fecha_inicio->format('Y-m-d H:i:s');
$men_fecha_fin = $fecha_fin->format('Y-m-d H:i:s');


$mysqli = new mysqli("localhost", "root", "", "db_gym_dos");

if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}

// Consulta para verificar membresía
$check_membresia = $mysqli->query("SELECT `men_id` FROM `membresia` WHERE `cliente_id`='$cli_id'");

if ($check_membresia->num_rows > 0 && $estado === "Activo") {
    // Realiza la inserción en la base de datos
    $mysqli = new mysqli("localhost", "root", "", "db_gym_dos");

    if ($mysqli->connect_error) {
        die("Error en la conexión: " . $mysqli->connect_error);
    }
    // Consulta SQL
    $sql = "SELECT `men_id` FROM `membresia` WHERE `cliente_id`='$cli_id'";

    // Ejecutar la consulta
    $resultado = $mysqli->query($sql);

    if ($resultado === false) {
        die("Error en la consulta: " . $mysqli->error);
    }

    // Obtener el valor de men_id (si existe)
    $membresia = null;
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $membresia = $fila['men_id'];
    }

    // Cerrar la conexión
    
    
    // Preparar la consulta SQL con marcadores de posición
    $sql = "UPDATE `membresia` SET `tipo_id`=?, `men_fecha_inicio`=?, `men_fecha_fin`=?, `men_estado`=? WHERE `men_id`=?";

    // Preparar la sentencia SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Error al preparar la consulta: " . $mysqli->error);
    }

    // Vincular los parámetros a la sentencia SQL
    $stmt->bind_param("sssss", $men_id, $men_fecha_inicio, $men_fecha_fin, $estado, $membresia);

    // Ejecutar la sentencia SQL
    if ($stmt->execute()) {
        echo "Actualización exitosa.";
    } else {
        echo "Error en la actualización: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $mysqli->close();


} else if ($check_membresia->num_rows <= 0 && $estado === "Activo") {



    // Realiza la inserción en la base de datos
    $mysqli = new mysqli("localhost", "root", "", "db_gym_dos");

    if ($mysqli->connect_error) {
        die("Error en la conexión: " . $mysqli->connect_error);
    }
    $sql = "SELECT `cliente_id` FROM `membresia` WHERE `cliente_id` = ?";

    // Sentencia preparada para evitar inyección SQL
    $stmt = $mysqli->prepare("INSERT INTO `membresia`(`cliente_id`, `tipo_id`, `men_fecha_inicio`, `men_fecha_fin`, `men_estado`) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $mysqli->error);
    }

    // Vincular los parámetros
    $stmt->bind_param("iisss", $cli_id, $men_id, $men_fecha_inicio, $men_fecha_fin, $estado);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "El registro se ha insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . $stmt->error;
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
    $mysqli->close();
}

$check_membresia->close(); // Cierra el resultado de la consulta
$mysqli->close(); // Cierra la conexión a la base de datos