Ext.define('labinfsis.view.laboratorio.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.labselector',
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
            displayField:   'nombre_laboratorio',
            valueField:     'id',
            store:          'Laboratorios',
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado laboratorios.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_laboratorio}</h3>' +
                    '<span style="font-size:11px; color:#333;">{numero_de_equipos} Computadoras - {descripcion_laboratorio}</span>' +
                    '</div>';
                }
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
        Ext.widget('laboratorioadd');
    }
});
