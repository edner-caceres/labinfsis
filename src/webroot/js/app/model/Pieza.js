Ext.define('labinfsis.model.Pieza', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_pieza',
    {
        name:'pieza_interna',
        type: 'boolean',
        mapping: 'pieza_interna'
    },
    'descripcion_pieza',
    'imagen'
    ]
});