Ext.define('labinfsis.model.Fabricante', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_fabricante',
    'descripcion_fabricante'
    ]
});