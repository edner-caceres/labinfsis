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
        'Equipos'
    ],
    
    launch: function() {
        var dashboard = Ext.create('Ext.Panel',{
            id: 'home',
            iconCls: 'icon-home',
            title: 'Dashboard',
            contentEl:'main_container',
            bodyStyle: 'background-color: transparent',
            autoScroll: true
        });
        var panel_inventarios=Ext.create('Ext.Panel',{

            title: 'Registro de Ingresos',
            layout: 'border',            
            items:[{             
                xtype: 'equipos',
                region:'center'
            },{
                title: 'Reservas Pendientes',
                collapsible: true,
                region:'east',
                html:'Detalle del item items.View',
                width:400,
                margins: '0 0 5 5'

            }]
        });
        var panel_principal = Ext.create('Ext.tab.Panel',{
            activeItem: 'ftp-user-list',
            region: 'center',
            id: 'main',
            items:[dashboard, panel_inventarios]

        });

        Ext.create('Ext.container.Viewport', {
            layout: 'border',
            items: [{
                contentEl: 'header',
                region:'north',
                height: 40
            },panel_principal,{
                contentEl: 'footer',
                border: false,
                region:'south'
            }]
        });
    }
});