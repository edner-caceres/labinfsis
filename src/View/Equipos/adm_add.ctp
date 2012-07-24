<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Equipo registrado', true),
                    'msg' => __('El nuevo Equipo fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id'=>$newID,
                    'nombre_equipo'=>$this->data['Equipo']['nombre_equipo'],
                    'nia'=>$this->data['Equipo']['nia'],
                    'codigo'=>$this->data['Equipo']['codigo'],
                    'estado_id'=>$this->data['Equipo']['estado_id'],
                    'nombre_estado'=>$this->data['Equipo']['nombre_estado'],
                    'nombre_estado'=>$this->data['Equipo']['nombre_estado'],
                    'disponible'=>false
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
                'errors' => $this->validationErrors['Equipo']
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