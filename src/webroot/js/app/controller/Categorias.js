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
    'Ext.tip.*'
    ],
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
            'categorias #tree':{
                itemclick: function(view, record, item, index, e, eOpts ){
                    this.seletedCategoriaId = record.get('id')
                    view.up('categorias').down('#listacategorias').setTitle('Subcategoria de ' + record.get('text'))
                    this.getCategoriasStore().load({
                        params:{
                            categoria: this.seletedCategoriaId
                        }
                    });
                },
                itemmove : this.updateCategoria
                
            }
        });
    },
    addCategoria: function(button){
        Ext.widget('addcategoria');

    },
    viewCategoria:function(a, b, c){
        console.log('Ver detalle de la categoria');
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
    updateCtagoria: function(ni, oldParent, newParent, index, eOpts){
        this.up('categorias').down('#tree').getEl().mask('Saving...', 'x-mask-loading');
        Ext.Ajax.request({  
            url: '/adm/categorias/update',
            params:{  
                parent: newParent.attributes.id  
            },  
            success: function(){  
                            
            },  
            failure: function(){  

                Ext.Msg.alert('Error','Error saving the changes');  
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