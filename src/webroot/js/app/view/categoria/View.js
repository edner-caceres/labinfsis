Ext.define('labinfsis.view.categoria.View', {
    extend: 'Ext.panel.Panel',
    alias : 'widget.categoria',
    id: 'img-detail-panel',

    width: 150,
    minWidth: 150,

    tpl: [
        '<div class="details">',
            '<tpl for=".">',
                    (!Ext.isIE6? '<img src="/img/computer-64x64.png" />' : 
                    '<div style="width:74px;height:74px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'/img/computer-64x64.png\')"></div>'),
                '<div class="details-info">',
                    '<b>Nombre:</b>',
                    '<span>{nombre_categoria}</span>',
                    '<b>Descripciòn:</b>',
                    '<span>{descripcion_categoria}</span>',
                '</div>',
            '</tpl>',
        '</div>'
    ],
    
    loadRecord: function(image) {
        this.body.hide();
        this.tpl.overwrite(this.body, image.data);
        this.body.slideIn('l', {
            duration: 250
        });
    }
});