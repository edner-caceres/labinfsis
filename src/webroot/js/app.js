/*Ext.require([
    'SisInventarios.view.compra.List'
]);*/
Ext.Loader.setConfig({
    enabled: true
});

Ext.application({
    name: 'labinfsis',
    paths: {
        'Ext.ux': 'js/libs/ext-plugins'
    },
    appFolder: 'js/app',
    controllers: [
        'Equipos',
        'Laboratorios',
        'Registros',
        'Componentes'
    ],
    
    launch: function() {
        
        var panel_ingreso=Ext.create('Ext.Panel',{
            layout: 'border',
            region:'center',
            items:[{             
                xtype: 'registros',
                region:'center'
            },{
                title: 'Reservas Pendientes',
                collapsible: true,
                region:'east',
                width:400,
                margins: '0 0 5 5',
                contentEl: 'log'

            }]
        });

        Ext.create('Ext.container.Viewport', {
            layout: 'border',
            items: [{
                contentEl: 'header',
                region:'north',
                height: 40
            },panel_ingreso,{
                contentEl: 'footer',
                border: false,
                region:'south'
            }]
        });
    }
});