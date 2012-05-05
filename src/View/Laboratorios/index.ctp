<?php
$datos = array();
foreach ($laboratorios as $laboratorio) {
    array_push($datos,$laboratorio['Laboratorio']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
