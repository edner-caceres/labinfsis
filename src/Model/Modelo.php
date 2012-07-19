<?php
App::uses('AppModel', 'Model');
/**
 * Modelo Model
 *
 * @property Componente $Componente
 */
class Modelo extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_modelo';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_modelo' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Componente' => array(
			'className' => 'Componente',
			'foreignKey' => 'modelo_id',
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
