<?php
$datos = array();
foreach ($equipos as $equipo) {
    $equipo['Equipo']['nombre_estado'] = $equipo['Estado']['nombre_estado'];
    array_push($datos,$equipo['Equipo']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
