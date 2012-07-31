Ext.define('labinfsis.model.Categoria', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    {
        name: 'categoria_id',
        type: 'int',
        mapping: 'categoria_id'
    },
    'nombre_categoria',
    'descripcion_categoria',
    'imagen_categoria'
    ]
});