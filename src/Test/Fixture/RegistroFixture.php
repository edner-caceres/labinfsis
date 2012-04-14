<?php
/**
 * RegistroFixture
 *
 */
class RegistroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'cuenta_id' => array('type' => 'integer', 'null' => false),
		'persona_id' => array('type' => 'integer', 'null' => false),
		'equipo_id' => array('type' => 'integer', 'null' => false),
		'curso_id' => array('type' => 'integer', 'null' => true),
		'fecha_registro_inicio' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'fecha_registro_fin' => array('type' => 'datetime', 'null' => true),
		'observaciones_registro' => array('type' => 'string', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'es_registrado_fk' => array('unique' => false, 'column' => 'persona_id'), 'es_registrado_por_fk' => array('unique' => false, 'column' => 'cuenta_id'), 'es_usado_fk' => array('unique' => false, 'column' => 'equipo_id'), 'para_un_curso_fk' => array('unique' => false, 'column' => 'curso_id')),
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
			'cuenta_id' => 1,
			'persona_id' => 1,
			'equipo_id' => 1,
			'curso_id' => 1,
			'fecha_registro_inicio' => '2012-04-14 15:00:48',
			'fecha_registro_fin' => '2012-04-14 15:00:48',
			'observaciones_registro' => 'Lorem ipsum dolor sit amet'
		),
	);
}
