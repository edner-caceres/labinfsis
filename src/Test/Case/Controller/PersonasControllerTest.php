<?php
App::uses('PersonasController', 'Controller');

/**
 * TestPersonasController *
 */
class TestPersonasController extends PersonasController {
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
 * PersonasController Test Case
 *
 */
class PersonasControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.persona', 'app.registro', 'app.cuenta', 'app.rol', 'app.revicion', 'app.equipo', 'app.estado', 'app.movimiento', 'app.componente', 'app.asignacion', 'app.laboratorio', 'app.curso', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Personas = new TestPersonasController();
		$this->Personas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personas);

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
