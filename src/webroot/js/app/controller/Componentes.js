Ext.define('labinfsis.controller.Componentes', {
    extend: 'Ext.app.Controller',
    stores: [
    'Componentes'
    ],
    models: [
    'Componente'
    ],
    views: [
    'componente.List'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    
    init: function() {
        this.control({
                        
        });
        
    }

});