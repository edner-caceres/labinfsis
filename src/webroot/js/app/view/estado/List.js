Ext.define('labinfsis.view.estado.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.estados',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    height: 415,
//    iconCls: 'icon-computer-16x16',
    title: 'Lista de Estados',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listaestados',
            xtype: 'grid',
            border: false,
            store: 'Estados',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_estado',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:150
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_estado',
                width: 350
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Estados'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Estados de  {2}',
                emptyMsg: "No hay Estados registrados"
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
                    action: 'addestado',
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
                    action: 'editestado',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteestado',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editestado]');
        var bdelete = this.down('button[action=deleteestado]');
        
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