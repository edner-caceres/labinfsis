Ext.define('labinfsis.view.fabricante.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.fabricantes',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    height: 415,
//    iconCls: 'icon-computer-16x16',
    title: 'Lista de Fabricantes',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listafabricantes',
            xtype: 'grid',
            border: false,
            store: 'Fabricantes',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_fabricante',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:150
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_fabricante',
                width: 350
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Fabricantes'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} fabricantes de  {2}',
                emptyMsg: "No hay Fabricantes registrados"
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
                    action: 'addfabricante',
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
                    action: 'editfabricante',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletefabricante',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editfabricante]');
        var bdelete = this.down('button[action=deletefabricante]');
        
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