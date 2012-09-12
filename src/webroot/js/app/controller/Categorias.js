Ext.define('labinfsis.controller.Categorias', {
    extend: 'Ext.app.Controller',
    stores: [
    'Categorias'
    ],
    models: [
    'Categoria'
    ],
    views: [
    'categoria.List',
    'categoria.Add',
    'categoria.Selector'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*',
    'labinfsis.view.categoria.CategoriaView',
    'labinfsis.view.categoria.Tree',
    'labinfsis.view.categoria.View',
    'Ext.data.TreeStore',
    'Ext.data.proxy.Ajax',
    'Ext.tree.Column',
    'Ext.tree.View',
    'Ext.selection.TreeModel',
    'Ext.tree.plugin.TreeViewDragDrop'
    ],
    refs: [{
        ref: 'categoriasList',
        selector: 'categorias'
    }], 
    seletedCategoriaId: 1,
    init: function() {
        this.control({
            'categorias button[action=addcategoria]': {
                click: this.addCategoria
            },
            'categorias button[action=editcategoria]': {
                click: this.editCategoria
            },
            'categorias #listacategorias': {
                itemdblclick: this.editCategoria
            },
            'categorias button[action=deletecategoria]': {
                click: this.deleteCategoria
            },
            'addcategoria button[action=save]': {
                click: this.saveCategoria
            },
            'categorias > categoriatree':{
                itemclick: this.cargarSubCategorias,
                itemmove : this.updateParent
                
            }
        });
    },
    addCategoria: function(button){
        Ext.widget('addcategoria');

    },
    viewCategoria:function(model, selected){
        var list = this.getCategoriasList(); 
        
        list.down('categoria').loadRecord(selected);
        list.selectChange(selected);
    },
    editCategoria: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listacategorias').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('addcategoria');
        view.down('form').loadRecord(record);

    },
    updateParent: function(ni, oldParent, newParent){
        var list = this.getCategoriasList(); 
        list.down('categoriatree').getEl().mask('Saving...', 'x-mask-loading');
        Ext.Ajax.request({  
            url: '/adm/categorias/update/'+ni.get('id'),
            params:{
                'data[Categoria][id]':ni.get('id'),
                'data[Categoria][categoria_id]': newParent.get('id'),
                'data[Categoria][old_categoria_id]': oldParent.get('id')
            },  
            success: function(){
                list.down('categoriatree').getEl().unmask();
                list.down('#listacategorias').setTitle('Subcategoria de ' + ni.get('text'));
                this.getCategoriasStore().load({
                    params:{
                        categoria: ni.parentNode.get('id')
                    }
                });
                return true;         
            },  
            failure: function(){
                list.down('categoriatree').getEl().unmask();
                Ext.Msg.alert('Error','Error saving the changes');
                return false;
            },
            scope:this
        }); 
    },
    cargarSubCategorias: function(view, record, item, index, e, eOpts ){
        this.seletedCategoriaId = record.get('id');
        view.up('categorias').selectChange(record);
        this.getCategoriasStore().load({
            params:{
                categoria: this.seletedCategoriaId
            }
        });
    },
    deleteCategoria: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Categoria',
            'Esta seguro que desea eliminar los categorias seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listacategorias').getSelectionModel().getSelection();
                    this.getCategoriasStore().remove(seleccion);
                    this.getCategoriasStore().sync();
                }
            },
            this
            );
    },
    saveCategoria: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getCategoriaModel().create();
                values.categoria_id = this.seletedCategoriaId
                record.set(values);
                this.getCategoriasStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getCategoriasStore().sync();
        }

    }

});