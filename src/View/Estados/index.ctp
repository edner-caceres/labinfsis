<?php
$datos = array();
foreach ($estados as $estado) {
    array_push($datos,$estado['Estado']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
