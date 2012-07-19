Ext.define('labinfsis.view.equipo.View', {
    extend: 'Ext.panel.Panel',
    alias : 'widget.equipoview',
    title:'Detalle del equipo',
    autoScroll: true,
    initComponent: function() {
        /*this.tpl= [
        '<div class="details">',
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
                    '<p><b>Descripcion:</b>',
                    '<span>{descripcion_equipo}</span></p>',
                '</div>',
            '</tpl>',
        '</div>'
        ];*/
        this.tpl = [
            '<div class="details">',
            '<tpl for=".">',
                '<div class="details-info">',
                    '<p>Recuperando informacion del equipo: ',
                    '<span><b>{nombre_equipo}</b></span></p>',
                '</div>',
            '</tpl>',
        '</div>'
    ]
        this.bodyStyle = "padding:10px";
        this.html = 'Seleccione un equipo para ver el detalle';
    
        this.callParent(arguments);
    },
    
    updateInfo: function(record) {
        this.tpl.overwrite(this.body, record.data);
        this.body.load({url:'/equipos/view/'+record.get('id')});
        /*
        this.tpl.overwrite(this.body, record.data);
        this.body.highlight();*/
    }
});