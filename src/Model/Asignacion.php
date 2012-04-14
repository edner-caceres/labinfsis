<?php
App::uses('AppModel', 'Model');
/**
 * Asignacion Model
 *
 * @property Equipo $Equipo
 * @property Laboratorio $Laboratorio
 * @property Movimiento $Movimiento
 */
class Asignacion extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_asignacion';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'equipo_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'laboratorio_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_asignacion' => array(
			'datetime' => array(
				'rule' => array('datetime'),
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
		'Equipo' => array(
			'className' => 'Equipo',
			'foreignKey' => 'equipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Laboratorio' => array(
			'className' => 'Laboratorio',
			'foreignKey' => 'laboratorio_id',
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
			'foreignKey' => 'asignacion_id',
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
