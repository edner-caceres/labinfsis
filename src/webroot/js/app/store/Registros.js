Ext.define('labinfsis.store.Registros', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Registro',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'adm/registros',
            update: 'adm/registros/edit',
            create: 'adm/registros/add',
            destroy: 'adm/registros/delete'
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