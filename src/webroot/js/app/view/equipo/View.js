Ext.define('labinfsis.view.equipo.View', {
    extend: 'Ext.panel.Panel',
    alias : 'widget.equipoview',
    title:'Detalle del/los equipo/s seleccionado/s',
    autoScroll: true,
    initComponent: function() {
        this.tpl= [
        '<div class="note">',
        '<tpl for=".">',
        (!Ext.isIE6? '<img src="icons/{thumb}" />' : 
            '<div style="width:74px;height:74px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'icons/{thumb}\')"></div>'),
        '<div class="details-info">',
        '<p><b>Nombre del Equipo:</b>',
        '<span>{nombre_equipo}</span></p>',
        '<p><b>NIA:</b>',
        '<span>{nia}</span></p>',
        '<p><b>Codigo:</b>',
        '<span>{codigo}</span></p>',
        '<p><b>Estado:</b>',
        '<span>{nombre_estado}</span></p>',
        '</div>',
        '</tpl>',
        '</div>'
        ];
        /*this.tpl = [
        '<div class="note">',
        '<tpl for=".">',
        '<div class="loading">',
        '<p>Recuperando informacion del equipo: ',
        '<span><b>{nombre_equipo}</b></span></p>',
        '</div>',
        '</tpl>',
        '</div>'
        ]*/
        this.bodyStyle = "padding:10px";
        this.html = '<div class="note">Seleccione un equipo para ver el detalle</div>';
            
    
        this.callParent(arguments);
    },
    
    updateInfo: function(records) {
        var input = [];
        var nombres = [];
        Ext.each(records, function(item){
            input.push(item.get('id'));
            nombres.push(item.get('nombre_equipo'));
        });
        if(records.length == 1){
        this.body.mask('Recuperando informacion del equipo: <b>' + nombres.join()+'</b>');
        }else{
            this.body.mask('Recuperando informacion de los equipos: <b>' + nombres.join()+'</b>');
        }
        this.body.load({
            method:'POST',
            url:'/equipos/view/',
            params:{
                equipos:input.join(',')
            }
        });
    
    
        this.body.highlight();
    }
});