<?php
App::uses('Laboratorio', 'Model');

/**
 * Laboratorio Test Case
 *
 */
class LaboratorioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.laboratorio', 'app.asignacion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Laboratorio = ClassRegistry::init('Laboratorio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Laboratorio);

		parent::tearDown();
	}

}
