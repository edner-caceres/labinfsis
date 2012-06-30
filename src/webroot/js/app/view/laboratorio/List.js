Ext.define('labinfsis.view.laboratorio.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.laboratorios',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    height: 415,
    iconCls: 'icon-roles-16x16',
    title: 'Lista de Laboratorio',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listalaboratorios',
            xtype: 'grid',
            border: false,
            store: 'Laboratorios',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_laboratorio',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:200
            },{
               header: 'Equipos',
                dataIndex: 'numero_de_equipos',
                width:50
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_laboratorio',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 260
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Laboratorios'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Laboratorios de  {2}',
                emptyMsg: "No hay Laboratorios registrados"
            })
        }];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addlaboratorio',
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
                    action: 'editlaboratorio',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletelaboratorio',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editlaboratorio]');
        var bdelete = this.down('button[action=deletelaboratorio]');
        
        if(selected.length > 0){
            bdelete.enable();
            if(selected.length == 1){
                bedit.enable();
            }else{
                bedit.disable();
            }
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});