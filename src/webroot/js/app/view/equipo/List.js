Ext.define('labinfsis.view.equipo.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.equipos',
    layout: 'border',
    autoShow: true,
    width: 550,
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
                header: 'NIA',
                dataIndex: 'nia',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:50     
            }, {
                header: 'Codigo Interno',
                dataIndex: 'codigo',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:100
            },{
                header: 'Nombre',
                dataIndex: 'nombre_equipo',
                width:100
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_equipo',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 260
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
            region:'west'
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
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});