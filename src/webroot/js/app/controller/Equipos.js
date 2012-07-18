Ext.define('labinfsis.controller.Equipos', {
    extend: 'Ext.app.Controller',
    stores: [
    'Equipos'
    ],
    models: [
    'Equipo'
    ],
    views: [
    'equipo.Add',
    'equipo.Menu',
    'equipo.List',
    'equipo.View',
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    
    init: function() {
        this.control({
            'equipos button[action=addequipo]': {
                click: this.addEquipo
            },
            'equipos button[action=editequipo]': {
                click: this.editEquipo
            },
            'equipos #listaequipos': {
                itemdblclick: this.editEquipo
            },
            'equipos button[action=deleteequipo]': {
                click: this.deleteEquipo
            },
            'equipos button[action=save]': {
                click: this.saveEquipo
            }            
        });
        
    },
    addEquipo: function(button){
        Ext.widget('equipoadd');

    },
    viewEquipo:function(rowmodel, record, index, eOpts){
        alert('Ver detalle del equipo');
    },
    editEquipo: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaequipos').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('equipoadd');
        view.down('form').loadRecord(record);

    },
    deleteEquipo: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Equipo',
            'Esta seguro que desea eliminar los equipos seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaequipos').getSelectionModel().getSelection();
                    this.getEquipossStore().remove(seleccion);
                    this.getEquiposStore().sync();
                }
            },
            this
            );
    },
    saveEquipo: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getEquiposModel().create();
                record.set(values);
                this.getEquiposStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getEquiposStore().sync();
        }
    },
    registrar: function(){
        Ext.widget('registroadd');
    }

});