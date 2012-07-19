Ext.define('labinfsis.view.componente.List' ,{
    extend: 'Ext.grid.Panel',
    alias : 'widget.componentes',
    height : 200,
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.store= 'Componentes';
        this.selModel= sm;
        this.bbar=Ext.create('Ext.PagingToolbar', {
            store: Ext.data.StoreManager.lookup('Componentes'),
            displayInfo: true,
            displayMsg: 'Mostrando {0} - {1} componentes de  {2}',
            emptyMsg: "No hay componentes registrados"
        });
        this.id='listacomponentes';
        this.columns =[{
            header: 'Componente',
            dataIndex: 'pieza_id',
            width:100
        },{
            header: 'Modelo',
            dataIndex: 'modelo_id',
            width:100
        },{
            header: 'Fabricante',
            dataIndex: 'fabricante_id',
            width: 100
        },{
            header: 'Numero de serie',
            dataIndex: 'numero_de_serie',
            width: 100
        }];
        
        this.tbar =[{
            text: 'Registrar',
            action: 'addcomponente',
            iconCls: 'icon-add-16x16'
        },'-',{
            text: 'Modificar',
            iconCls: 'icon-edit-16x16',
            action: 'editcomponente',
            disabled:true
        },{
            text: 'Eliminar',
            iconCls:'icon-delete-16x16',
            action:'deletecomponente',
            disabled:true
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editcomponente]');
        var bdelete = this.down('button[action=deletecomponente]');
        
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