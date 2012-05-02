Ext.define('labinfsis.view.equipo.List' ,{
    extend: 'Ext.panel.Panel',
    alias : 'widget.equipos',
    requires:['Ext.ux.DataView.Animated'],
    layout: 'fit',
    autoShow: true,
    modal: true,       
    initComponent: function() {        
        this.items=[
        Ext.create('Ext.view.View', {
            deferInitialRefresh: false,
            store: Ext.data.StoreManager.lookup('Equipos'),
            tpl  : Ext.create('Ext.XTemplate',
                '<tpl for=".">',
                '<div class="item">',
                (!Ext.isIE6? '<img width="64" height="64" src="/img/computer-64x64.png" />' :
                    '<div style="width:74px;height:74px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'img/computer-64x64.png\',sizingMethod=\'scale\')"></div>'),
                '<strong>{nombre_equipo}</strong>',
                '<strong>{nombre_estado}</strong>',
                '</div>',
                '</tpl>'
                ),

            plugins : [
            Ext.create('Ext.ux.DataView.Animated', {
                duration  : 550,
                idProperty: 'id'
            })
            ],
            id: 'items',

            itemSelector: 'div.item',
            overItemCls : 'item-hover',
            multiSelect : true,
            autoScroll  : true
        })

        ],
        this.tbar=[{
            title:'Session',
            xtype:'buttongroup',
            columns:2,
            items:[{
                xtype: 'buttongroup',
                rowspan:2,
                items:[{
                    iconCls: 'icon-add-32x32',
                    scale:'large',
                    menu:{
                        xtype: 'menu',
                        style: {
                            overflow: 'visible'     // For the Combo popup
                        },
                        items:[{                    
                            xtype:'combo',
                            hideLabel: true,
                            store: Ext.create('Ext.data.ArrayStore', {
                                fields: ['abbr', 'state'],
                                data : [['1','Laboratorio #1'],['2','Laboratorio #2'],['3','Laboratorio de Redes']]
                            }),
                            displayField: 'state',
                            typeAhead: true,
                            queryMode: 'local',
                            triggerAction: 'all',
                            emptyText: 'Seleccione un laboratorio...',
                            selectOnFocus: true,
                            iconCls:'no-icon'
                        },'-',{
                            text:'Informacion Personal'
                        },{
                            text:'Cambiar contraseña'
                        },{
                            text:'Salir',
                            iconCls:'icon-cancel-16x16'
                        }]
                    }
                }]
            },{
                xtype: 'tbtext',
                text:'<b>Edner Elvis Cáceres Lazo</b>'
            },{
                xtype: 'tbtext',
                text:'Administrador Lab. Computo'
            }]
        },{
            title:'Ver',
            xtype:'buttongroup',
            columns:3,
            items:[{
                xtype: 'buttongroup',
                defaults:{
                    enableToggle: true,
                    scale:'large'
                },
                items:[{
                    text: 'Todos',
                    toggleGroup: 'view',
                    action: 'all',
                    pressed: true
                },{
                    text: 'Activos',
                    toggleGroup: 'view',
                    action: 'active'
                }]
            },{
                xtype: 'buttongroup',
                defaults:{
                    enableToggle: true,
                    scale:'large'
                },
                items:[{
                    toggleGroup: 'filter',
                    text: 'Disponibles',
                    action: 'free',
                    pressed: true
                },{
                    toggleGroup: 'filter',
                    text: 'En uso',
                    action:'used'
                }]
            }]
        }]
        this.callParent(arguments);
    }

});