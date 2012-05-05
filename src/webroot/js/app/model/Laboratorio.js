Ext.define('labinfsis.model.Laboratorio', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_laboratorio',
    'numero_de_equipos',
    'descripcion_laboratorio'
    ]
});