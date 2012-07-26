<?php
$respuesta = array(
    'success'=> $eliminado,
    'mensage'=> array(
        'titulo'=> 'Error al eliminar',
        'msg'=> 'No se puede eliminar el estado '
        
    ),
    'data'=>array()
);
echo json_encode($respuesta);
?>