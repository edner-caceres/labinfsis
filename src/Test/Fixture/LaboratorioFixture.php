<?php
/**
 * LaboratorioFixture
 *
 */
class LaboratorioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nombre_laboratorio' => array('type' => 'string', 'null' => false, 'length' => 50),
		'numero_de_equipos' => array('type' => 'integer', 'null' => false),
		'descripcion_laboratorio' => array('type' => 'string', 'null' => true),
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
			'nombre_laboratorio' => 'Lorem ipsum dolor sit amet',
			'numero_de_equipos' => 1,
			'descripcion_laboratorio' => 'Lorem ipsum dolor sit amet'
		),
	);
}
