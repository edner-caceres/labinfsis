<?php
App::uses('Registro', 'Model');

/**
 * Registro Test Case
 *
 */
class RegistroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.registro', 'app.cuenta', 'app.rol', 'app.persona', 'app.revicion', 'app.equipo', 'app.estado', 'app.movimiento', 'app.componente', 'app.asignacion', 'app.laboratorio', 'app.curso', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Registro = ClassRegistry::init('Registro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Registro);

		parent::tearDown();
	}

}
