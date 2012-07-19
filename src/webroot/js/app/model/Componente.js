Ext.define('labinfsis.model.Componente', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'modelo_id',
    'fabricante_id',
    'equipo_id',
    'pieza_id',
    'estado_id',
    'numero_de_serie'
    ]
});