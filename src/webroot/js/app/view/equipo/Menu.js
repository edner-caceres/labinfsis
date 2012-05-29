Ext.define('labinfsis.view.equipo.Menu' ,{
    extend:'Ext.menu.Menu',
    alias : 'widget.menuequipos',
    //store: 'Laboratorios',
    initComponent:function(){
        this.items=[{
                text:'Ver Informacion del Equipo'
        }, '-',{
                text: 'Registrar',
                itemId:'asignar',
                iconCls:'icon-add-16x16',
                handler: labinfsis.controller.Equipos.registrar
                
        }];
        //this.store = Ext.data.StoreManager.lookup('Laboratorios');
        this.callParent(arguments);
    }    
});