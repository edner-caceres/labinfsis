Ext.define('labinfsis.view.equipo.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.equipos',
    layout: 'border',
    autoShow: true,
    modal:true,
    width: 900,
    height: 600,
    iconCls: 'icon-computer-16x16',
    title: 'Lista de equipos registrados',
    initComponent: function() {        
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listaequipos',
            region:'center',
            xtype: 'grid',
            border: false,
            store: 'Equipos',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_equipo',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:100
            },{
                header: 'NIA',
                dataIndex: 'nia',
                width:150     
            }, {
                header: 'S/N',
                dataIndex: 'codigo',
                width:100
            },{
                header: 'Tipo',
                dataIndex: 'categoria_id',
                width:100,
                renderer: function(value, metaData, record, rowIndex, colIndex, store){
                    var sp = Ext.data.StoreManager.lookup('Categorias');
                    var index = sp.find('id', value);
                    if(index >= 0 ){
                        return sp.getAt(index).get('nombre_categoria');
                    }
                           
                    return value;
                }  
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Equipos'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} equipos de  {2}',
                emptyMsg: "No hay Equipos registrados"
            })
        },{
            xtype:'equipoview',
            width: 390,
            region:'east'
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
                    action: 'addequipo',
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
                    action: 'editequipo',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteequipo',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editequipo]');
        var bdelete = this.down('button[action=deleteequipo]');
        
        if(selected.length > 0){
            bdelete.enable();
            if(selected.length == 1){
                bedit.enable();
            }else{
                bedit.disable();
            }
            var view = this.down('equipoview');
            view.updateInfo(selected);
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});