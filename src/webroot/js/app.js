/*Ext.require([
    'SisInventarios.view.compra.List'
]);*/
Ext.Loader.setConfig({
    enabled: true
});

Ext.application({
    name: 'SisInventarios',
    paths: {
        'Ext.ux': 'js/libs/ext-plugins'
    },
    appFolder: 'js/app',
    controllers: [
        
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

            title: 'Sistema de Inventarios',
            layout: 'border',            
            items:[{             
                id:'item-list',
                xtype: 'panel',
                region:'center',
                margins: '0 0 5 0',
                layout:'fit',
                bodyStyle:'padding:5px',                
                items:[{                        
                        xtype:'panel',                        
                        layout:'border',                        
                        items:[{                                
                                xtype:'panel',
                                //itemId:'gridPanelCompra',
                                region:'north'
                                
                        },{
                                xtype:'panel',
                                //itemId:'detallePanelItem',
                                //title:'Items que corresponden a la compra seleccionada',
                                //bodyPadding:5,
                                region:'center'
                                
                        }]
                }]
            },{
                title: 'Detalle del item seleccionado',
                collapsible: true,
                region:'east',
                html:'Detalle del item items.View',
                width:400,
                margins: '0 0 5 5'

            }],
            tbar:[{
                title: 'Acciones',
                xtype: 'buttongroup',
                columns: 3,
                items:[{
                    xtype: 'buttongroup',
                    items:{
                        scale: 'large',                        
                        text: 'Registrar',
                        action:'addrol',
                        iconAlign: 'top',
                        iconCls: 'icon-add-32x32'
                    }
                },{
                    xtype: 'buttongroup',
                    items:[{
                        id: 'editar',
                        text: 'Modificar',
                        action:'editcompra',
                        scale: 'large',
                        iconAlign: 'top',                        
                        iconCls: 'icon-edit-32x32',
                        disable:true
                    },{
                        id: 'eliminar',
                        text: 'Eliminar',
                        action:'deletecompra',
                        iconCls:'icon-delete-32x32',
                        scale: 'large',
                        iconAlign: 'top',
                        disable:true
                    }]
                },{
                    xtype: 'buttongroup',
                    defaults:{
                        scale: 'large',
                        iconAlign: 'top'
                    },
                    items:[{
                        text: 'Selectores',                        
                        iconCls: 'icon-search-32x32'
                        
                    },{

                        text: 'Ordenar',
                        iconCls:'icon-ordenar-aux'
                    }]
                }]
            },'->', {
                title: 'Catalogos',
                xtype: 'buttongroup',
                columns: 4,
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    xtype: 'buttongroup',
                    defaults:{
                        scale: 'large',
                        iconAlign: 'top'
                    },
                    items:[ {
                        text: 'Proveedores',
                        iconCls: 'icon-provider-32x32'
                    },{
                        text: 'Grupos',
                        iconCls:'icon-group-32x32'
                    }, {
                        text: 'Roles',
                        iconCls:'icon-roles-32x32'

                    },{
                        text:'Marcas',
                        iconCls:'icon-marcas-32x32'
                    },{
                        text:'Industrias',
                        iconCls:'icon-industry-32x32'
                    },{
                        text:'Almacenes',
                        iconCls:'icon-depot-32x32'
                    },{
                        text:'Clientes',
                        iconCls:'icon-client-32x32'
                    },{
                        text: 'Empleados',
                        iconCls:'icon-employee-32x32'

                    },{
                        text: 'Dosificacion',
                        iconCls:'icon-ii-32x32'

                    },{
                        text: 'Descuentos',
                        iconCls:'icon-descuentos-32x32'

                    }]
                }]
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