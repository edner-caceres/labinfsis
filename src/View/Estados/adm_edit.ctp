<?php

if($actualizado) {
    
    $lista_estados = array();
    foreach ($estados as $estado) {
        
        array_push($lista_estados, $estado['Estado']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_estados
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Estado']
    );
}
echo json_encode($respuesta);
?>