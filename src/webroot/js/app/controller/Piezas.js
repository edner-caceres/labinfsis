Ext.define('labinfsis.controller.Piezas', {
    extend: 'Ext.app.Controller',
    stores: [
    'Piezas'
    ],
    models: [
    'Pieza'
    ],
    views: [
    'estado.List',
    'estado.Add',
    'estado.Selector'
    ],
    init: function() {
        this.control({
            'piezas button[action=addpiezas]': {
                click: this.addPieza
            },
            'piezas button[action=editpieza]': {
                click: this.editPieza
            },
            'piezas #listapiezas': {
                itemdblclick: this.editPieza
            },
            'piezas button[action=deletepieza]': {
                click: this.deletePieza
            },
            'addpieza button[action=save]': {
                click: this.savePieza
            }
        });
    },
    addPieza: function(button){
        Ext.widget('addpieza');

    },
    viewPieza:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editPieza: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listapiezas').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('addpieza');
        view.down('form').loadRecord(record);

    },
    deletePieza: function(button){
        Ext.MessageBox.confirm(
            'Eliminar pieza',
            'Esta seguro que desea eliminar las piezas seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listapiezas').getSelectionModel().getSelection();
                    this.getPiezasStore().remove(seleccion);
                    this.getPiezasStore().sync();
                }
            },
            this
            );
    },
    savePieza: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getPiezaModel().create();
                record.set(values);
                this.getPiezasStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getPiezasStore().sync();
        }
    }

});