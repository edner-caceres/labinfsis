Ext.define('labinfsis.view.equipo.View', {
    extend: 'Ext.panel.Panel',
    alias : 'widget.equipoview',
    title:'Detalle del equipo',
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
        //this.tpl.overwrite(this.body, record.data);
        if(records.length == 1){
            this.body.mask('Recuperando informacion del equipo: ' + records[0].get('nombre_equipo'));
            this.body.load({
                url:'/equipos/view/'+records[0].get('id')
            });
        }else{
            this.tpl.overwrite(this.body, records);
        }
        
    /*
        this.tpl.overwrite(this.body, record.data);
        this.body.highlight();*/
    }
});