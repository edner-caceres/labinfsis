<?php
App::uses('RegistrosController', 'Controller');

/**
 * TestRegistrosController *
 */
class TestRegistrosController extends RegistrosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * RegistrosController Test Case
 *
 */
class RegistrosControllerTestCase extends CakeTestCase {
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
		$this->Registros = new TestRegistrosController();
		$this->Registros->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Registros);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
/**
 * testAdmIndex method
 *
 * @return void
 */
	public function testAdmIndex() {

	}
/**
 * testAdmView method
 *
 * @return void
 */
	public function testAdmView() {

	}
/**
 * testAdmAdd method
 *
 * @return void
 */
	public function testAdmAdd() {

	}
/**
 * testAdmEdit method
 *
 * @return void
 */
	public function testAdmEdit() {

	}
/**
 * testAdmDelete method
 *
 * @return void
 */
	public function testAdmDelete() {

	}
}
