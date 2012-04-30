Ext.define('labinfsis.view.equipo.List' ,{
    extend: 'Ext.panel.Panel',
    alias : 'widget.equipos',
    requires:['Ext.ux.DataView.Animated'],
    layout: 'fit',
    autoShow: true,
    modal: true,
    width: 650,
    height: 420,        
    initComponent: function() {
        
        this.items=[
        Ext.create('Ext.view.View', {
            deferInitialRefresh: false,
            store: Ext.data.StoreManager.lookup('Equipos'),
            tpl  : Ext.create('Ext.XTemplate',
                '<tpl for=".">',
                '<div class="phone">',
                (!Ext.isIE6? '<img width="64" height="64" src="/img/computer-64x64.png" />' :
                    '<div style="width:74px;height:74px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'img/computer-64x64.png\',sizingMethod=\'scale\')"></div>'),
                '<strong>{nombre_equipo}</strong>',
                '</div>',
                '</tpl>'
                ),

            plugins : [
            Ext.create('Ext.ux.DataView.Animated', {
                duration  : 550,
                idProperty: 'id'
            })
            ],
            id: 'phones',

            itemSelector: 'div.phone',
            overItemCls : 'phone-hover',
            multiSelect : true,
            autoScroll  : true
        })

        ],
        this.tbar=[{
            title:'Acciones',
            xtype:'buttongroup',
            columns:3,
            items:[{
                xtype:'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addalmacen',
                    iconCls: 'icon-add-32x32'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-32x32',
                    action: 'editalmacen',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletealmacen',
                    disabled:true
                }]
            }]
        }]
        this.callParent(arguments);
    }

});