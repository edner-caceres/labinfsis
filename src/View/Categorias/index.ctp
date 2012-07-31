<?php
$datos = array();
foreach ($categorias as $categoria) {
    array_push($datos,$categoria['Categoria']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
