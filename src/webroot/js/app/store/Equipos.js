Ext.define('labinfsis.store.Equipos', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Equipo',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'equipos/tolist',
            update: 'equipos/edit',
            create: 'equipos/add',
            destroy: 'equipos/delete'
        },
        reader: {
            type: 'json',
            root: 'data',
            successProperty: 'success',
            totalProperty: 'total'
        },
        writer: {
            type: 'json',
            writeAllFields: true,
            root: 'data',
            encode:true
        }
    },
    sorters: [{
        property : 'nombre_laboratorio',
        direction: 'asc'
    }]
});