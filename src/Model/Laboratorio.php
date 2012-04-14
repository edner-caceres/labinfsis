<?php
App::uses('AppModel', 'Model');
/**
 * Laboratorio Model
 *
 * @property Asignacion $Asignacion
 */
class Laboratorio extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_laboratorio';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_laboratorio' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero_de_equipos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Asignacion' => array(
			'className' => 'Asignacion',
			'foreignKey' => 'laboratorio_id',
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
