<?php
$datos = array();
foreach ($equipos as $equipo) {

    array_push($datos,$equipo['Equipo']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
