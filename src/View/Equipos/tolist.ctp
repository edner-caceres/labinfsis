<?php
//print_r($equipos);
$datos = array();
foreach ($equipos as $equipo) {
    $equipo['Equipo']['nombre_estado'] = $estados[$equipo['Equipo']['estado_id']];
    $equipo['Equipo']['disponible'] = true;
    array_push($datos,$equipo['Equipo']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
