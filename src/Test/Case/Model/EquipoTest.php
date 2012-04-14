<?php
App::uses('Equipo', 'Model');

/**
 * Equipo Test Case
 *
 */
class EquipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo', 'app.estado', 'app.movimiento', 'app.registro', 'app.revicion', 'app.componente', 'app.asignacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Equipo = ClassRegistry::init('Equipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equipo);

		parent::tearDown();
	}

}
