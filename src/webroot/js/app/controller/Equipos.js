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
            //functions
            });
    }

});