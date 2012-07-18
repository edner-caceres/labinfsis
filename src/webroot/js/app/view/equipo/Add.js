Ext.define('labinfsis.view.equipo.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.equipoadd',
    title : 'Registrar nuevo Equipo',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 450,
    iconCls: 'icon-add-16x16',
    initComponent: function() {
        this.items = [{
            xtype: 'form',
            border:false,
            bodyStyle: 'padding:10px; background-color:#DFE9F6',
            defaults:{
                xtype: 'textfield',
                msgTarget: 'side',
                anchor: '100%',
                layout: {
                    type: 'hbox',
                    defaultMargins: {
                        top: 0, 
                        right: 5, 
                        bottom: 0, 
                        left: 0
                    }
                },
                allowBlank: false
            },
            fieldDefaults: {
                labelAlign: 'top'                
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                fieldLabel: 'Nombre del Equipo',
                name:'nombre_equipo'
            },{
                xtype:'fieldcontainer',
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
                    fieldLabel:'NIA',
                    name : 'nia'
                    
                },{
                    name:'codigo',
                    fieldLabel:'Codigo Interno'
                }]                
            },{
                xtype:'panel',
                title: 'Componentes',
                html: 'Lista de partes internas y externas'                
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
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