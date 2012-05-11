Ext.define('labinfsis.controller.Equipos', {
    extend: 'Ext.app.Controller',
    stores: [
    'Equipos'
    ],
    models: [
    'Equipo'
    ],
    views: [
    'equipo.List'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
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
            'equipos #lab-select-tb':{
                change: function(combo, newValue, oldValue, eOpts){
                    var store = Ext.data.StoreManager.lookup('Equipos');
                    store.clearFilter();
                    store.resumeEvents();
                    store.load({
                        params:{laboratorio: newValue}
                    })
                }
            },
            'equipos #items':{
                itemcontextmenu: function(view, record, item, index, e,eOpts ){
                    alert('menu contextual');
                },
                itemclick: function(view, record, item, index, e, eOpts){
                    alert('mostrar qtip');
                },
                itemdblclick:function(view, record, item, index, e, eOpts){
                    alert('mostrar dialogo de registrar');
                }
            }
                
        });
    },
    filterView: function( button, pressed, eOpts){
        var store = Ext.data.StoreManager.lookup('Equipos');
        store.clearFilter();
        store.resumeEvents();
        var nameFilter = button.getId();
        if(pressed && nameFilter =='active') store.filter('estado_id', 1);
        else if(pressed && nameFilter =='outservice') store.filter('estado_id', 2);
        
        store.sort('nombre_equipo', 'ASC');
    }

});