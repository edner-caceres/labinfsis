<?php

App::uses('AppModel', 'Model');

/**
 * Equipo Model
 *
 * @property Estado $Estado
 * @property Movimiento $Movimiento
 * @property Registro $Registro
 * @property Revicion $Revicion
 * @property Componente $Componente
 * @property Asignacion $Asignacion
 */
class Equipo extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombre_equipo';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'estado_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'nombre_equipo' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Estado' => array(
            'className' => 'Estado',
            'foreignKey' => 'estado_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'categoria_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Movimiento' => array(
            'className' => 'Movimiento',
            'foreignKey' => 'equipo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Registro' => array(
            'className' => 'Registro',
            'foreignKey' => 'equipo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Revicion' => array(
            'className' => 'Revicion',
            'foreignKey' => 'equipo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Componente' => array(
            'className' => 'Componente',
            'foreignKey' => 'equipo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Asignacion' => array(
            'className' => 'Asignacion',
            'foreignKey' => 'equipo_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
