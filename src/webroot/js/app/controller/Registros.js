Ext.define('labinfsis.controller.Registros', {
    extend: 'Ext.app.Controller',
    stores: [
    'Registros'
    ],
    models: [
    'Registro'
    ],
    views: [
    'registro.Registro',
    'registro.Add',
    ],
    itemSelect:0,
    filterActive:{
        view: 1,
        available:true,
        used: true
    },
    init: function() {
        this.control({
            'registros button[action=viewall]':{
                toggle: this.filterView
            },
            'registros button[action=viewoutservice]':{
                toggle:this.filterView
            },
            'registros button[action=viewactive]':{
                toggle: this.filterView
            },
            'registros button[action=filterfree]':{
                toggle: this.filterAvailable
            },
            'registros button[action=filterall]':{
                toggle:this.filterAvailable
            },
            'registros button[action=filterused]':{
                toggle: this.filterAvailable
            },
            'registros #lab-select-tb':{
                change: function(combo, newValue, oldValue, eOpts){
                    var store = Ext.data.StoreManager.lookup('Equipos');
                    store.suspendEvents();
                    store.clearFilter();
                    store.resumeEvents();
                    store.load({
                        params:{
                            laboratorio: newValue
                        },
                        callback: function(records, operation, success){
                            if(success){
                                this.itemSelect = 0;
                                this.applyFilter();
                            }
                        },
                        scope: this
                    });
                    
                }
            },
            'registros #items':{
                itemcontextmenu: function(view, record, item, index, e,eOpts ){
                    var menu = Ext.widget('menuequipos');
                    e.stopEvent();
                    menu.showAt(e.getXY());
                    this.itemSelect = record.get('id');
                    return false;
                },
                itemdblclick:function(view, record, item, index, e, eOpts){
                    this.itemSelect = record.get('id');
                    this.registrar();
                }
            },
            'menuequipos #asignar':{
                click: function(button, e){
                    this.registrar()
                }
            }                
        });
        this.applyFilter();
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
    },
    filterView: function( button, pressed, eOpts){

        var nameFilter = button.getId();
        var equipos = button.up('registros');
        var toolbar = equipos.down('#filter-a')
        
        if(pressed && nameFilter =='active'){
            toolbar.enable(false);            
            this.filterActive.view = 1; 
        }else if( pressed && nameFilter =='outservice'){
            this.filterActive.view = 2;
            toolbar.disable(true);
        }else if(pressed && nameFilter =='all'){
            toolbar.enable(false);
            this.filterActive.view = 0;
        }
        if(pressed) this.applyFilter();
    },
    filterAvailable: function( button, pressed, eOpts){
        
        var nameFilter = button.getId();
        
        if(pressed){
            if(nameFilter =='filterfree'){            
                this.filterActive.available = true; 
            }else if(nameFilter =='filterused'){
                this.filterActive.used = true; 
            }
        }else{
            if(nameFilter =='filterfree'){            
                this.filterActive.available = false; 
            }else if(nameFilter =='filterused'){
                this.filterActive.used = false; 
            }
        }       
        this.applyFilter();
        
    },
    applyFilter: function(){
        var store = Ext.data.StoreManager.lookup('Equipos');
        //TODO: the suspend/resume hack can be removed once Filtering has been updated
        store.suspendEvents();
        store.clearFilter();
        store.resumeEvents();
        
        store.filter([{
            fn: function(record) {
                var res = true;
                if(this.filterActive.view != 0){
                    res = res && record.get('estado_id') == this.filterActive.view;
                }
                if(this.filterActive.view != 2){
                    if(!(this.filterActive.available && this.filterActive.used)){
                        if(this.filterActive.available){
                            res = res && record.get('disponible') == true;
                        }else if(this.filterActive.used){
                            res = res && record.get('disponible') == false;
                        }
                    }
                }
                return res;
            },
            scope: this
        }]);        
        
        store.sort('nombre_equipo', 'ASC');
    },
    registrar: function(){
        Ext.widget('registroadd');
    }

});