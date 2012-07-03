Ext.define('labinfsis.controller.Laboratorios', {
    extend: 'Ext.app.Controller',
    stores: [
    'Laboratorios'
    ],
    models: [
    'Laboratorio'
    ],
    views: [
    'laboratorio.List',
    'laboratorio.Add',
    'laboratorio.Selector'
    ],
    init: function() {
        this.control({
            'laboratorios button[action=addlaboratorio]': {
                click: this.addLaboratorio
            },
            'laboratorios button[action=editlaboratorio]': {
                click: this.editLaboratorio
            },
            'laboratorios #listalaboratorios': {
                itemdblclick: this.editLaboratorio
            },
            'laboratorios button[action=deletelaboratorio]': {
                click: this.deleteLaboratorio
            },
            'laboratorioadd button[action=save]': {
                click: this.saveLaboratorio
            }
        });
    },
    addLaboratorio: function(button){
        Ext.widget('laboratorioadd');

    },
    viewLaboratorio:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editLaboratorio: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listalaboratorios').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('laboratorioadd');
        view.down('form').loadRecord(record);

    },
    deleteLaboratorio: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Laboratorio',
            'Esta seguro que desea eliminar los laboratorios seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listalaboratorios').getSelectionModel().getSelection();
                    this.getLaboratoriosStore().remove(seleccion);
                    this.getLaboratoriosStore().sync();
                }
            },
            this
            );
    },
    saveLaboratorio: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getLaboratorioModel().create();
                record.set(values);
                this.getLaboratoriosStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getLaboratoriosStore().sync();
        }
    }

});