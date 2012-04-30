Ext.define('labinfsis.model.Equipo', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'estado_id',
    'nia',
    'codigo',
    'nombre_equipo',
    'descripcion_equipo'
    ]
});