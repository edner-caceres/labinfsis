
Ext.define('labinfsis.view.categoria.CategoriaView', {
    extend: 'Ext.view.View',
    alias : 'widget.categoriaview',
    requires: ['Ext.data.Store'],
    mixins: {
        dragSelector: 'Ext.ux.DataView.DragSelector',
        draggable   : 'Ext.ux.DataView.Draggable'
    },
    
    tpl: [
        '<tpl for=".">',
            '<div class="thumb-wrap">',
                '<div class="thumb">',
                    (!Ext.isIE6? '<img src="/img/computer-64x64.png" />' : 
                    '<div style="width:76px;height:76px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'/img/computer-64x64.png\')"></div>'),
                '</div>',
                '<span>{nombre_categoria}</span>',
            '</div>',
        '</tpl>'
    ],
    
    itemSelector: 'div.thumb-wrap',
    multiSelect: false,
    singleSelect: true,
    cls: 'x-image-view',
    autoScroll: true,
    
    initComponent: function() {
        this.store = 'Categorias';
        
        this.mixins.dragSelector.init(this);
        this.mixins.draggable.init(this, {
            ddConfig: {
                ddGroup: 'categoriaDD'
            },
            ghostTpl: [
                '<tpl for=".">',
                    '<img src="/img/computer-64x64.png" />',
                    '<tpl if="xindex % 4 == 0"><br /></tpl>',
                '</tpl>',
                '<div class="count">',
                    '{[values.length]} images selected',
                '<div>'
            ]
        });
        
        this.callParent();
    }
});