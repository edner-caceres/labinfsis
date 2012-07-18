Ext.define('labinfsis.view.equipo.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.equipos',
    layout: 'border',
    autoShow: true,
    width: 650,
    height: 415,
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
                header: 'Codigo Interno',
                dataIndex: 'codigo',
                width:100
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Equipos'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Laboratorios de  {2}',
                emptyMsg: "No hay Laboratorios registrados"
            })
        },{
            xtype:'equipoview',
            width: 240,
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
            view.updateInfo(selected[0]);
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});