Ext.define('labinfsis.store.Fabricantes', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Fabricante',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'adm/fabricantes',
            update: 'adm/fabricantes/edit',
            create: 'adm/fabricantes/add',
            destroy: 'adm/fabricantes/delete'
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