<?php
$datos = array();
foreach ($fabricantes as $fabricante) {
    array_push($datos,$fabricante['Fabricante']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
