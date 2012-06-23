Ext.define('SisInventarios.view.rol.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.rolselector',
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
            displayField:   'nombre_rol',
            valueField:     'id',
            store:          'Roles',
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado roles.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_rol}</h3>' +
                    '<span style="font-size:11px; color:#333;">{descripcion}</span>' +
                    '</div>';
                }
            }
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]
        

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('roladd');
    }
});
