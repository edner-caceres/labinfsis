<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Estado registrado', true),
                    'msg' => __('El nuevo Estado fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id'=>$newID,
                    'nombre_esatdo'=>$this->data['Estado']['nombre_estado'],
                    'descripcion_estado'=>$this->data['Estado']['descripcion_estado']
                )
            );
            print json_encode($respuesta);
        } break;
    case 0: {

            $resultado = array(
                'success' => false,
                'mensage' => array(
                    'titulo' => __('Error al guardar', true),
                    'msg' => __('El formulario tiene errores, corrijalos y vuelva ha intentarlo', true)
                ),
                'errors' => $this->validationErrors['Estado']
            );
            print json_encode($resultado);
        } break;
    case 2:
        $resultado = array(
            'success' => false,
            'mensage' => array(
                'titulo' => __('Error al guardar', true),
                'msg' => __('NO se recibio datos para registrar', true)
            ),
            'errors' => array()
        );
        print json_encode($resultado);
        break;
}
?>