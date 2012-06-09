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
        available:true,
        used: false
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
                    this.applyFilter();
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
        this.applyFilter();
    },
    filterView: function( button, pressed, eOpts){

        var nameFilter = button.getId();
        if(pressed && nameFilter =='active'){            
            this.filterActive.view = 1; 
        }else if( pressed && nameFilter =='outservice'){
            this.filterActive.view = 2;
        }else if(pressed){
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
                this.filterActive.available = true; 
            }
        }else{
            if(nameFilter =='filterfree'){            
                this.filterActive.available = false; 
            }else if(nameFilter =='filterused'){
                this.filterActive.available = false; 
            }
        }       
        if(pressed) this.applyFilter();
        
    },
    applyFilter: function(){
        var store = Ext.data.StoreManager.lookup('Equipos');
        //TODO: the suspend/resume hack can be removed once Filtering has been updated
        store.suspendEvents();
        store.clearFilter();
        store.resumeEvents();
        
        if(this.filterActive.view != 0){
            store.filter('estado_id',this.filterActive.view);
        }
        if(this.filterActive.available != null){
            store.filter('disponible', this.filterActive.available);
        } 
        
        store.sort('nombre_equipo', 'ASC');
    },
    registrar: function(){
        alert('seleccionado :' + this.itemSelect);
    }

});