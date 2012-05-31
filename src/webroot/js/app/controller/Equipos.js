Ext.define('labinfsis.controller.Equipos', {
    extend: 'Ext.app.Controller',
    stores: [
    'Equipos'
    ],
    models: [
    'Equipo'
    ],
    views: [
    'equipo.List',
    'equipo.Menu'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    itemSelect:0,
    filterActive:{
        view: 1,
        available:true
    }, 
    init: function() {
        this.control({
            'equipos button[action=viewall]':{
                toggle: this.filterView
            },
            'equipos button[action=viewoutservice]':{
                toggle:this.filterView
            },
            'equipos button[action=viewactive]':{
                toggle: this.filterView
            },
            'equipos button[action=filterfree]':{
                toggle: this.filterAvailable
            },
            'equipos button[action=filterall]':{
                toggle:this.filterAvailable
            },
            'equipos button[action=filterused]':{
                toggle: this.filterAvailable
            },
            'equipos #lab-select-tb':{
                change: function(combo, newValue, oldValue, eOpts){
                    var store = Ext.data.StoreManager.lookup('Equipos');
                    store.clearFilter();
                    store.resumeEvents();
                    store.load({
                        params:{
                            laboratorio: newValue
                        }
                    });
                    this.itemSelect = 0;
                }
            },
            'equipos #items':{
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
        //this.applyFilter();
    },
    filterView: function( button, pressed, eOpts){

        var nameFilter = button.getId();
        if(pressed && nameFilter =='active'){            
            this.filterActive.view = 1; 
        }else if( pressed && nameFilter =='outservice'){
            $()
            this.filterActive.view = 2; 
        }else{
            this.filterActive.view = 0;
        }        
        this.applyFilter();
    },
    filterAvailable: function( button, pressed, eOpts){
        
        var nameFilter = button.getId();
        if(pressed && nameFilter =='filterfree'){            
            this.filterActive.available = true; 
        }else if(pressed && nameFilter =='filterused'){
            this.filterActive.available = false; 
        }else{
            this.filterActive.available = null; 
        }
       
        this.applyFilter();        
        
    },
    applyFilter: function(){
        var store = Ext.data.StoreManager.lookup('Equipos');
        store.clearFilter();
        store.resumeEvents();
        store.filter([{
            fn: function(record) {
                if(this.filterActive.available == null){
                    return record.get('estado_id') == this.filterActive.view
                }else if(this.filterActive.view == 0){
                    return record.get('disponible') == this.filterActive.available;
                }else{
                    return record.get('estado_id') == this.filterActive.view && record.get('disponible') == this.filterActive.available;
                }
                
            },
            scope: this
        }]);       
        
        store.sort('nombre_equipo', 'ASC');
    },
    registrar: function(){
        alert('seleccionado :' + this.itemSelect);
    }

});