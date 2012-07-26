Ext.define('labinfsis.store.EquiposIngresos', {
    extend: 'Ext.data.Store',
    model: 'labinfsis.model.Equipo',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'registros/allocable'
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