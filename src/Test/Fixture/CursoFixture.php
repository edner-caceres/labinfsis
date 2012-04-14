<?php
/**
 * CursoFixture
 *
 */
class CursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'tipo_id' => array('type' => 'integer', 'null' => false),
		'nombre_curso' => array('type' => 'string', 'null' => false, 'length' => 100),
		'instructor' => array('type' => 'string', 'null' => false, 'length' => 250),
		'descripcion_curso' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'tipo_fk' => array('unique' => false, 'column' => 'tipo_id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipo_id' => 1,
			'nombre_curso' => 'Lorem ipsum dolor sit amet',
			'instructor' => 'Lorem ipsum dolor sit amet',
			'descripcion_curso' => 'Lorem ipsum dolor sit amet'
		),
	);
}
