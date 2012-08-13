<?php

if($actualizado) {
    $respuesta = array(
        'success' => $actualizado,
        'mensage'=>array()
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Categoria']
    );
}
echo json_encode($respuesta);
?>