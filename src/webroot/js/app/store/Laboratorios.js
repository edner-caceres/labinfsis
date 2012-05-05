Ext.define('labinfsis.store.Laboratorios', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Laboratorio',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'laboratorios',
            update: 'laboratorios/edit',
            create: 'laboratorios/add',
            destroy: 'laboratorios/delete'
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
    }
});