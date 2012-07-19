Ext.define('labinfsis.store.Componentes', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Componente',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'adm/componentes',
            update: 'adm/componentes/edit',
            create: 'adm/componentes/add',
            destroy: 'adm/componentes/delete'
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