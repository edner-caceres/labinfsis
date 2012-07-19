<?php
$datos = array();
foreach ($componentes as $componente) {
    array_push($datos,$componente['Componente']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>