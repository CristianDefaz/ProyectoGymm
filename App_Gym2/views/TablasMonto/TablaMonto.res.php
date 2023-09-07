<?php

error_reporting(0);

// Obtener las fechas y el valor desde la URL
$fechaDesde = $_GET['fechaDesde'];
$fechaHasta = $_GET['fechaHasta'];



$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// FRECUENCIA DE FECHA
$sql = "SELECT fa_fecha, COUNT(fa_fecha) AS frecuencia
        FROM facturas
        GROUP BY fa_fecha
        ORDER BY frecuencia DESC
        LIMIT 1";

$resultado = mysqli_query($mysqli, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

// Obtener el resultado de la consulta
if ($row = mysqli_fetch_assoc($resultado)) {
    $fa_fecha = $row['fa_fecha'];
    $frecuencia = $row['frecuencia'];
} else {
    // No se encontraron registros
    $fa_fecha = 0;
    $frecuencia = 0;
}
// Numero de membresias
$sql = "SELECT COUNT(`men_id`) AS numero_de_membresias FROM facturas WHERE `fa_fecha` BETWEEN '$fechaDesde' AND '$fechaHasta'";
$resultado = mysqli_query($mysqli, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$fila = mysqli_fetch_assoc($resultado);
$numero_de_membresias = $fila['numero_de_membresias'];

// MEMBRESIA MAS VENDIDA
$sql = "SELECT tipo_menbresia.tipo_menbresia, COUNT(*) AS cantidad_vendida 
        FROM facturas 
        INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id 
        WHERE facturas.fa_fecha BETWEEN '$fechaDesde' AND '$fechaHasta' 
        GROUP BY tipo_menbresia.tipo_menbresia 
        ORDER BY cantidad_vendida DESC 
        LIMIT 1";

$resultado = mysqli_query($mysqli, $sql);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    $tipo_menbresia = $fila['tipo_menbresia'];
    $cantidad_vendida = $fila['cantidad_vendida'];
} else {
    $tipo_menbresia = 0;
    $cantidad_vendida = 0;
}

// PROMEDIO MONTOS
$sql = "SELECT AVG(fa_montol_total) AS promedio_montos FROM facturas WHERE fa_fecha BETWEEN '$fechaDesde' AND '$fechaHasta'";
$resultado = mysqli_query($mysqli, $sql);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    $promedioMontos = $fila['promedio_montos'];
} else {
    $promedioMontos=0;
}

mysqli_close($mysqli);


$response = array(
    'fa_fecha' => $fa_fecha,
    'numero_de_membresias' => $numero_de_membresias,
    'tipo_menbresia' => $tipo_menbresia,
    'cantidad_vendida' => $cantidad_vendida,
    'promedioMontos' => $promedioMontos
);

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

