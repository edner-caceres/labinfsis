Ext.define('labinfsis.controller.Registros', {
    extend: 'Ext.app.Controller',
    stores: [
    'Registros'
    ],
    models: [
    'Registro'
    ],
    views: [
    'registro.Add',
    ],
    init: function() {
        
    },
    addRegistro: function(button){
        Ext.widget('registroadd');

    },
    viewRegistro:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editRegistro: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaregistros').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('registrosadd');
        view.down('form').loadRecord(record);

    },
    deleteRegistro: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Registro',
            'Esta seguro que desea eliminar los registros seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaregistros').getSelectionModel().getSelection();
                    this.getRegistrosStore().remove(seleccion);
                    this.getRegistrosStore().sync();
                }
            },
            this
            );
    },
    saveRegistro: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getRegistroModel().create();
                record.set(values);
                this.getRegistrosStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getRegistrosStore().sync();
        }
    }

});