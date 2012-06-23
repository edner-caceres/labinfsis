<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Laboratorio registrado', true),
                    'msg' => __('El nuevo Laboratorio fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id'=>$newID, 'nombre_laboratorio'=>$this->data['Laboratorio']['nombre_laboratorio'],
                    'numero_de_equipos'=>$this->data['Laboratorio']['numero_de_equipos'],
                    'descripcion_laboratorio'=>$this->data['Laboratorio']['descripcion_laboratorio']
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
                'errors' => $this->validationErrors['Laboratorio']
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