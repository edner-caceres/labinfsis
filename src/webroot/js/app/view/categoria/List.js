Ext.define('labinfsis.view.categoria.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.categorias',
    layout: 'border',
    autoShow: true,
    modal:true,
    width: 720,
    height: 415,
    iconCls:'icon-group-16x16',
    title: 'Lista de Categorias',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.treestore = Ext.create('Ext.data.TreeStore', {
            proxy: {
                type: 'ajax',
                url: 'adm/categorias/tree',
                method:'POST'
            },
            root: {
                text: 'Categorias',
                id: 1,
                expanded: true
            },
            folderSort: true,            
            sorters: [{
                property: 'text',
                direction: 'ASC'
            }]
        });

        this.tree = Ext.create('Ext.tree.Panel', {
            id:'tree',
            title:'Categorias',
            store: this.treestore,
            viewConfig: {
                plugins: {
                    ptype: 'treeviewdragdrop'
                }
            },
            region:'west',
            rootVisible:false,
            width: 200,
            useArrows: true
        });
        this.grid = {
            id:'listacategorias',
            xtype: 'grid',
            region:'center',
            border: false,
            store: 'Categorias',
            title: 'Sub-categorias',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_categoria',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Descripcion',
                dataIndex: 'descripcion_categoria',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 330
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Categorias'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} categorias de  {2}',
                emptyMsg: "No hay categorias registrados"
            })
        };
        this.items=[this.grid, this.tree];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'addcategoria',
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
                    action: 'editcategoria',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletecategoria',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editcategoria]');
        var bdelete = this.down('button[action=deletecategoria]');
        
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