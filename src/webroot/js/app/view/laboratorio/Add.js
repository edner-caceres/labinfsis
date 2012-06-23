Ext.define('labinfsis.view.laboratorio.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.laboratorioadd',
    title : 'Registrar nuevo Laboratorio',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
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
                name : 'nombre_laboratorio',
                fieldLabel: 'Nombre del Laboratorio',               
                anchor:'50%'
            },{
                
                name : 'numero_de_equipos',
                fieldLabel: 'Numero de Equipos',                
                anchor:'40%'
            },{
                anchor: '100%',
                xtype: 'htmleditor',                
                name : 'descripcion_laboratorio',
                fieldLabel: 'Descripcion',
                allowBlank: true,
                height: 200
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