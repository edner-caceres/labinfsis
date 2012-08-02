Ext.define('Ext.ux.field.ImageField',{
    extend: 'Ext.form.field.Base',
    alias:'widget.imagefield',
    fieldSubTpl:['<img id="{id}" class="{fieldCls}" src="images/icons/{value}"',{
        compiled:true,
        disableFormats:true
    }],
    fieldCls: Ext.baseCSSPrefix + 'form-image-field',
    value: null,
    
    initEvents: function(){
        this.callParent(),
        this.inputEl.on('click', this._click, this,{
            delegate:'img.form-image-field'
        });
    },
    setValue:function(v){
        var me = this;
        me.callParent(arguments);
        //change url image value here ..
    },
    onRender: function(){
        var me = this;
        me.callParent(arguments);
        
        var name = me.name || Ext.id();
        
        me.hiddenField = me.inputEl.insertSibling({
            tag: 'input',
            type:'hidden',
            name : name
        });
        
        me.setValue(me.value);
    },
    _click: function(e, o){
        this.fireEvent('click', this, e);
    }
    
});