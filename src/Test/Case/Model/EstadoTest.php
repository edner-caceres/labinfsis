<?php
App::uses('Estado', 'Model');

/**
 * Estado Test Case
 *
 */
class EstadoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.estado', 'app.componente', 'app.equipo', 'app.movimiento', 'app.registro', 'app.cuenta', 'app.rol', 'app.persona', 'app.revicion', 'app.curso', 'app.tipo', 'app.asignacion', 'app.laboratorio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estado = ClassRegistry::init('Estado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estado);

		parent::tearDown();
	}

}
