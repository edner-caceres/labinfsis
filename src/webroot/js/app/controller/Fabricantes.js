Ext.define('labinfsis.controller.Fabricantes', {
    extend: 'Ext.app.Controller',
    stores: [
    'Fabricantes'
    ],
    models: [
    'Fabricante'
    ],
    views: [
    'fabricante.List',
    'fabricante.Add',
    'fabricante.Selector'
    ],
    init: function() {
        this.control({
            'fabricantes button[action=addfabricante]': {
                click: this.addFabricante
            },
            'fabricantes button[action=editfabricante]': {
                click: this.editFabricante
            },
            'fabricantes #listafabricantes': {
                itemdblclick: this.editFabricante
            },
            'fabricantes button[action=deletefabricante]': {
                click: this.deleteFabricante
            },
            'fabricanteadd button[action=save]': {
                click: this.saveFabricante
            }
        });
    },
    addFabricante: function(button){
        Ext.widget('fabricanteadd');

    },
    viewFabricante:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editFabricante: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listafabricantes').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('fabricanteadd');
        view.down('form').loadRecord(record);

    },
    deleteFabricante: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Fabricante',
            'Esta seguro que desea eliminar los fabricantes seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listafabricantes').getSelectionModel().getSelection();
                    this.getFabricantesStore().remove(seleccion);
                    this.getFabricantesStore().sync();
                }
            },
            this
            );
    },
    saveFabricante: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getFabricanteModel().create();
                record.set(values);
                this.getFabricantesStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getFabricantesStore().sync();
        }
    }

});