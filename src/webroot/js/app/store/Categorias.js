Ext.define('labinfsis.store.Categorias', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Categoria',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'adm/categorias',
            update: 'adm/categorias/edit',
            create: 'adm/categorias/add',
            destroy: 'adm/categorias/delete'
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