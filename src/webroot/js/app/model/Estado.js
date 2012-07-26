Ext.define('labinfsis.model.Estado', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_estado',
    'descripcion_estado'
    ]
});