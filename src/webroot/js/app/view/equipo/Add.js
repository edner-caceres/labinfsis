Ext.define('labinfsis.view.equipo.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.equipoadd',
    title : 'Registrar nuevo Equipo',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 530,
    iconCls: 'icon-add-16x16',
    initComponent: function() {
        this.items = [{
            xtype: 'form',
            border:false,
            bodyStyle: 'padding:10px; background-color:#DFE9F6',
            defaults:{
                layout: {
                    type: 'hbox',
                    defaultMargins: {
                        top: 0, 
                        right: 5, 
                        bottom: 0, 
                        left: 0
                    }
                }
            },
            fieldDefaults: {
                labelAlign: 'top'                
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                xtype:'container',
                style:{
                    paddingBottom: '20px'
                },
                defaults:{
                    xtype:'textfield',
                    msgTarget:'side',
                    allowBlank:false,
                    flex: 1
                },
                fieldDefaults: {
                    labelAlign: 'top'
                },
                items:[{
                    fieldLabel: 'Nombre del Equipo',
                    name:'nombre_equipo'
                },{
                    name:'estado_id',
                    fieldLabel: 'Estado',
                    admin: true,
                    xtype:'selectorestados'
                },{
                    name:'categoria_id',
                    xtype:'selectorcategoria',
                    admin:true,
                    fieldLabel:'Tipo'
                }]
            },{
                xtype:'container',
                style:{
                    paddingBottom: '20px'
                },
                defaults:{
                    xtype:'textfield',
                    flex: 1
                },
                fieldDefaults: {
                    labelAlign: 'top'                
                },
                items:[{                    
                    fieldLabel:'NIA',
                    name : 'nia'
                    
                },{
                    name:'codigo',
                    fieldLabel:'Numero de serie'
                }]                
            },{
                anchor: '100%',
                xtype: 'htmleditor',
                name : 'descripcion_equipo',
                enableSourceEdit:false,
                fieldLabel: 'Descripcion',
                allowBlank: true,
                height: 150
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
            iconCls:'icon-save-16x16'
        },{
            text: 'Save and add components',
            action: 'add-components',
            iconCls:'icon-save-16x16'
        },{
            text: 'Cancel',
            scope: this,
            handler: this.close,
            iconCls:'icon-cancel-16x16'
        }];

        this.callParent(arguments);
    }
});