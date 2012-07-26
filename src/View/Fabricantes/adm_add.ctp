<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Fabricante registrado', true),
                    'msg' => __('El nuevo Fabricante fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id'=>$newID,
                    'nombre_fabricante'=>$this->data['Fabricante']['nombre_fabricante'],
                    'descripcion_fabricante'=>$this->data['Fabricante']['descripcion_fabricante']
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
                'errors' => $this->validationErrors['Fabricante']
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