<?php
/**
 * EquipoFixture
 *
 */
class EquipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'estado_id' => array('type' => 'integer', 'null' => false),
		'nia' => array('type' => 'string', 'null' => true, 'length' => 50),
		'codigo' => array('type' => 'string', 'null' => false, 'length' => 32),
		'nombre_equipo' => array('type' => 'string', 'null' => false, 'length' => 10),
		'descripcion_equipo' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'esta_en_estado_fk' => array('unique' => false, 'column' => 'estado_id')),
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
			'estado_id' => 1,
			'nia' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'nombre_equipo' => 'Lorem ip',
			'descripcion_equipo' => 'Lorem ipsum dolor sit amet'
		),
	);
}
