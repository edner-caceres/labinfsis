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
        view: '',
        available:''
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
    },
    filterView: function( button, pressed, eOpts){

        var nameFilter = button.getId();
        if(pressed){
            if(nameFilter =='active'){
                this.filterActive.view = 1; 
            }else if(nameFilter =='outservice'){
                this.filterActive.view = 2; 
            }
        }
        
        
        this.applyFilter();
    },
    filterAvailable: function( button, pressed, eOpts){
        
        var nameFilter = button.getId();
        if(pressed){
            if(nameFilter =='filterfree'){
                this.filterActive.available = true; 
            }else if(nameFilter =='filterused'){
                this.filterActive.available = false; 
            }
        }
        this.applyFilter();        
        
    },
    applyFilter: function(){
        var store = Ext.data.StoreManager.lookup('Equipos');
        store.clearFilter();
        store.resumeEvents();
        store.filter([{
            fn: function(record) {
                return record.get('estado_id') == this.filterActive.view && record.get('disponible') == this.filterActive.available;
            }
        }]); 
        
        
        store.sort('nombre_equipo', 'ASC');
    },
    registrar: function(){
        alert('seleccionado :' + this.itemSelect);
    }

});