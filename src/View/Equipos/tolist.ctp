<?php
//print_r($equipos);
$datos = array();
foreach ($equipos as $equipo) {
    $equipo['Equipo']['nombre_estado'] = $estados[$equipo['Equipo']['estado_id']];
    $equipo['Equipo']['disponible'] = rand(0, 1) === 1;
    array_push($datos,$equipo['Equipo']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
