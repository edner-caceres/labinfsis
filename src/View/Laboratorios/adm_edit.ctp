<?php

if($actualizado) {
    
    $lista_laboratorios = array();
    foreach ($laboratorios as $laboratorio) {
        
        array_push($lista_laboratorios, $laboratorio['Laboratorio']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_laboratorios
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Laboratorio']
    );
}
echo json_encode($respuesta);
?>