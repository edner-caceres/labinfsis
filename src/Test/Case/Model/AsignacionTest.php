<?php
App::uses('Asignacion', 'Model');

/**
 * Asignacion Test Case
 *
 */
class AsignacionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.asignacion', 'app.equipo', 'app.estado', 'app.movimiento', 'app.registro', 'app.revicion', 'app.componente', 'app.laboratorio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Asignacion = ClassRegistry::init('Asignacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asignacion);

		parent::tearDown();
	}

}
