Ext.define('labinfsis.controller.Estados', {
    extend: 'Ext.app.Controller',
    stores: [
    'Estados'
    ],
    models: [
    'Estado'
    ],
    views: [
    'estado.List',
    'estado.Add',
    'estado.Selector'
    ],
    init: function() {
        this.control({
            'estados button[action=addestado]': {
                click: this.addEstado
            },
            'estados button[action=editestado]': {
                click: this.editEstado
            },
            'estados #listaestados': {
                itemdblclick: this.editEstado
            },
            'estados button[action=deleteestado]': {
                click: this.deleteEstado
            },
            'estadoadd button[action=save]': {
                click: this.saveEstado
            }
        });
    },
    addEstado: function(button){
        Ext.widget('estadoadd');

    },
    viewLaboratorio:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editEstado: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaestados').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('estadoadd');
        view.down('form').loadRecord(record);

    },
    deleteEstado: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Laboratorio',
            'Esta seguro que desea eliminar los esatdos seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaestados').getSelectionModel().getSelection();
                    this.getEstadosStore().remove(seleccion);
                    this.getEstadosStore().sync();
                }
            },
            this
            );
    },
    saveEstado: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getEstadoModel().create();
                record.set(values);
                this.getEstadosStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getEstadosStore().sync();
        }
    }

});