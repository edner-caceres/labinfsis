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
        this.items = [
        {
            xtype: 'categoriatree',
            region: 'west',
            padding: 5,
            width: 200
        },
        {
            xtype: 'panel',
            id:'listacategorias',
            layout: 'border',
            region: 'center',
            padding: '5 5 5 0',
            items: [{
                id:'img-chooser-view',
                xtype: 'categoriaview',
                trackOver: true,
                region:'center'
            }]
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
    selectChange: function( selected ){
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