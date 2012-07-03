Ext.define('labinfsis.view.registro.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.registroadd',
    title : 'Registrar nuevo Ingreso',
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
                allowBlank: false
            },
            fieldDefaults: {
                labelAlign: 'top'
                
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                xtype:'container',
                layout: 'column',
                style:{
                    paddingBottom:'20px',
                    paddingRight:'20px'
                },
                items:[{
                    xtype:'container',
                    columnWidth:.65,
                    layout:'form',
                    items:[{
                        xtype:'textfield',
                        fieldLabel:'Auxiliar',
                        msgTarget:'side',
                        allowBlank:false,
                        anchor:'90%'
                    }]
                },{
                    xtype:'container',
                    columnWidth:.35,
                    layout:'form',
                    items:[{
                        xtype:'textfield',
                        name:'nombres',
                        fieldLabel:'Equipo',
                        msgTarget:'side',
                        allowBlank:false,
                        anchor:'90%'
                    }]
                }]                
            },{
                fieldLabel: 'Estudiante'
            },{
                fieldLabel: 'Curso'
            },{
                xtype:'container',
                layout: 'column',
                style:{
                    paddingBottom:'20px'
                },
                items:[{
                    xtype:'container',
                    columnWidth:.50,
                    layout:'form',
                    items:[{
                        xtype:'datefield',
                        fieldLabel:'Entrada',
                        msgTarget:'side',
                        allowBlank:false,
                        anchor:'90%'
                    }]
                },{
                    xtype:'container',
                    columnWidth:.50,
                    layout:'form',
                    items:[{
                        xtype:'datefield',
                        name:'nombres',
                        fieldLabel:'Salida',
                        msgTarget:'side',
                        allowBlank:false,
                        anchor:'90%'
                    }]
                }]                
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