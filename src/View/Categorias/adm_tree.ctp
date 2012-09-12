<?php

$datos = array();
foreach ($categorias as $categoria) {
    array_push($datos, array(
        'id' => $categoria['Categoria']['id'],
        'nombre_categoria' => $categoria['Categoria']['nombre_categoria'],
        'leaf' => $categoria['Categoria']['childs'] == 0,
        'iconCls' => ''
    ));
}

echo json_encode($datos);
?>
