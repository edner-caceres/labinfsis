
<?php
$datos = array();
foreach ($registros as $registro) {
    array_push($datos,$registro['Registro']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>