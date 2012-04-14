<?php
/**
 * AsignacionFixture
 *
 */
class AsignacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'equipo_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'laboratorio_id' => array('type' => 'integer', 'null' => false),
		'fecha_asignacion' => array('type' => 'datetime', 'null' => false),
		'fecha_retiro' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'equipo_asignado' => array('unique' => false, 'column' => 'equipo_id'), 'laboratorio_asignado' => array('unique' => false, 'column' => 'laboratorio_id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'equipo_id' => 1,
			'id' => 1,
			'laboratorio_id' => 1,
			'fecha_asignacion' => '2012-04-14 14:49:48',
			'fecha_retiro' => '2012-04-14'
		),
	);
}
