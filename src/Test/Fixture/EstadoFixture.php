<?php
/**
 * EstadoFixture
 *
 */
class EstadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nombre_estado' => array('type' => 'string', 'null' => false, 'length' => 250),
		'descripcion_estado' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
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
			'nombre_estado' => 'Lorem ipsum dolor sit amet',
			'descripcion_estado' => 'Lorem ipsum dolor sit amet'
		),
	);
}
