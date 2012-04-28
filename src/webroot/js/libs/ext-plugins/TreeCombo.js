/* All credits of this Extjs 4.x plugin its for malstroem user from Extjs forum
 * Ext forum profile: http://www.sencha.com/forum/member.php?56140-malstroem
 *
 * Also, this plugin has initally created by Animal from Extjs forum
 * Ext forum profile: http://www.sencha.com/forum/member.php?10-Animal
 *
 * The original post can be found here:
 * http://www.sencha.com/forum/showthread.php?38654-Tree-in-a-Combo.
 *
 * I just posted this code at jsfiddle to help how wants to see these plugin in action
 * or maybe change some things at real time with no problems. All the credits deserve to
 * Animal and Malstroem
 */


// --------------------------------------------------
// ---      PLUGIN DEFINITION OF COMBOTREE        ---
// --------------------------------------------------
Ext.define("Ext.ux.TreeCombo", {
    extend : "Ext.form.field.Picker",
    alias: 'widget.treecombo',
    initComponent : function() {
        var self = this;
        Ext.apply(self, {
            fieldLabel : self.fieldLabel,
            labelWidth : self.labelWidth
            // pickerAlign : "tl"
            });
        self.addEvents('groupSelected');
        self.callParent();
    },
    createPicker : function() {
        var self = this;
        self.picker = new Ext.tree.Panel({
            height : 300,
            width: 200,
            autoScroll : true,
            floating : true,
            resizable: false,
            focusOnToFront : false,
            shadow : true,
            ownerCt : this.ownerCt,
            useArrows : true,
            store : self.store,
            root: self.root,
            rootVisible : false,
            listeners:{
                scope:this,
                select:this.valueSelected
            }
        });
        return self.picker;
    },
    alignPicker : function() {
        // override the original method because otherwise the height of the treepanel would be always 0
        var me = this, picker, isAbove, aboveSfx = '-above';
        if (this.isExpanded) {
            picker = me.getPicker();
            if (me.matchFieldWidth) {
                // Auto the height (it will be constrained by min and max width) unless there are no records to display.
                if (me.bodyEl.getWidth() > this.treeWidth){
                    picker.setWidth(me.bodyEl.getWidth());
                } else picker.setWidth(this.treeWidth);
            }
            if (picker.isFloating()) {
                picker.alignTo(me.inputEl, "", me.pickerOffset);// ""->tl
                // add the {openCls}-above class if the picker was aligned above the field due to hitting the bottom of the viewport
                isAbove = picker.el.getY() < me.inputEl.getY();
                me.bodyEl[isAbove ? 'addCls' : 'removeCls'](me.openCls
                        + aboveSfx);
                picker.el[isAbove ? 'addCls' : 'removeCls'](picker.baseCls
                        + aboveSfx);
            }
        }
    },
    valueSelected: function(picker,value,options) {
        this.setValue(value.data.text);
        //this.setRawValue(value.data.id);
        this.fireEvent('valueSelected',this,value.data.id);
        this.collapse();
    }
}); 