<?php

if($actualizado) {
    
    $lista_fabricantes = array();
    foreach ($fabricantes as $fabricante) {
        
        array_push($lista_fabricantes, $fabricante['Fabricante']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_fabricantes
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Fabricante']
    );
}
echo json_encode($respuesta);
?>