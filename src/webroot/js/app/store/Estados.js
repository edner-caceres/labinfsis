Ext.define('labinfsis.store.Estados', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Estado',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'estados',
            update: 'adm/estados/edit',
            create: 'adm/estados/add',
            destroy: 'adm/estados/delete'
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