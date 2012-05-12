Ext.define('labinfsis.view.equipo.Menu' ,{
    extend:'Ext.ux.menu.DynamicMenu',
    alias : 'widget.menuequipos',       
    initComponent:function(){
        this.store = Ext.data.StoreManager.lookup('Laboratorios');
        this.callParent(arguments);
    }    
});