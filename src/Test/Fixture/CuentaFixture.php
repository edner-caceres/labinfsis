<?php
/**
 * CuentaFixture
 *
 */
class CuentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'rol_id' => array('type' => 'integer', 'null' => false),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'usuario' => array('type' => 'integer', 'null' => false),
		'contrasenia' => array('type' => 'string', 'null' => false, 'length' => 40),
		'fecha_registro' => array('type' => 'date', 'null' => false),
		'fecha_caducidad' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'persona_fk' => array('unique' => false, 'column' => 'persona_id'), 'rol_fk' => array('unique' => false, 'column' => 'rol_id')),
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
			'rol_id' => 1,
			'persona_id' => 1,
			'usuario' => 1,
			'contrasenia' => 'Lorem ipsum dolor sit amet',
			'fecha_registro' => '2012-04-14',
			'fecha_caducidad' => '2012-04-14'
		),
	);
}
