/**
 * @class Ext.org.AlbumTree
 * @extends Ext.tree.Panel
 * @xtype albumtree
 *
 * This class implements the "My Albums" tree. In addition, this class provides the ability
 * to add new albums and accept dropped items from the {@link Ext.org.ImageView}.
 */
Ext.define('labinfsis.view.categoria.Tree', {
    extend: 'Ext.tree.Panel',
    alias : 'widget.categoriatree',    
    animate: true,
    //rootVisible: false,
    
    viewConfig: {
        plugins: {
            ddGroup: 'categoriaDD',
            ptype  : 'treeviewdragdrop'
        },
        listeners: {
                drop: function(node, data, dropRec, dropPosition) {
                    alert('drop');
                }
            }
    },
    
    displayField: 'nombre_categoria',
    
    initComponent: function() {
        this.count = 1;        
        this.store = Ext.create('Ext.data.TreeStore', {
            proxy: {
                type: 'ajax',
                url: 'adm/categorias/tree',
                method:'POST'
            },
            root: {
                nombre_categoria: 'Categorias',
                id: 1,
                expanded: true,
                leaf:false
            },
            folderSort: true,            
            sorters: [{
                property: 'text',
                direction: 'ASC'
            }],
            fields: [{
                name:'id',
                type: 'int',
                mapping: 'id'
            },
            'nombre_categoria',
            'iconCls',
            {
                name: 'leaf', 
                defaultValue: true
            }
            ]
        });
        
        this.callParent();
    }
});