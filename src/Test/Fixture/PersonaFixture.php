<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'ci' => array('type' => 'string', 'null' => false, 'length' => 10),
		'nombres' => array('type' => 'string', 'null' => false, 'length' => 50),
		'apellido_paterno' => array('type' => 'string', 'null' => false, 'length' => 50),
		'apellido_materno' => array('type' => 'string', 'null' => true, 'length' => 50),
		'email' => array('type' => 'string', 'null' => true, 'length' => 100),
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
			'ci' => 'Lorem ip',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellido_paterno' => 'Lorem ipsum dolor sit amet',
			'apellido_materno' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);
}
