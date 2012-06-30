Ext.define('labinfsis.model.Registro', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },{
        name:'cuenta_id',
        type: 'int',
        mapping: 'cuenta_id'
    },{
        name:'cuenta_id',
        type: 'int',
        mapping: 'cuenta_id'
    },{
        name:'equipo_id',
        type: 'int',
        mapping: 'equipo_id'
    },{
        name:'curso_id',
        type: 'int',
        mapping: 'curso_id'
    },{
        name: 'fecha_registro_inicio',
        type: 'date',
        mapping: 'fecha_registro_inicio'
    },
    {
        name: 'fecha_registro_fin',
        type: 'date',
        mapping: 'fecha_registro_fin'
    },
    'observaciones_registro'
    ]
});