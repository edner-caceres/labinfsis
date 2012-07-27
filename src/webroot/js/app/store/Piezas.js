Ext.define('labinfsis.store.Piezas', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Pieza',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'adm/piezas',
            update: 'adm/piezas/edit',
            create: 'adm/piezas/add',
            destroy: 'adm/piezas/delete'
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