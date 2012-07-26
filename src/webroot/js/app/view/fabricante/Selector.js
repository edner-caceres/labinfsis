Ext.define('labinfsis.view.fabricante.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.selectorfabricante',
    combineErrors: true,
    msgTarget: 'side',
    layout: 'hbox',
    defaults: {
        hideLabel: true
    },
    initComponent: function() {
        this.items=[{
            flex:           1,
            xtype:          'combo',
            mode:           'remote',
            triggerAction:  'all',
            forceSelection: true,
            editable:       true,
            name:           this.name,
            displayField:   'nombre_fabricante',
            valueField:     'id',
            store:          'Fabricantes',
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado estados.'
            }
        }]
        
        this.callParent(arguments);
        if(this.admin){
            this.add({
                xtype:          'button',
                iconCls:        'icon-add-16x16',
                handler:        this.showFormAdd
            });
        }
    },
    showFormAdd: function(){
        Ext.widget('fabricanteadd');
    }
});
