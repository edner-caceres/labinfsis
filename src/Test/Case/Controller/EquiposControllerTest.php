<?php
App::uses('EquiposController', 'Controller');

/**
 * TestEquiposController *
 */
class TestEquiposController extends EquiposController {
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
 * EquiposController Test Case
 *
 */
class EquiposControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.equipo', 'app.estado', 'app.movimiento', 'app.registro', 'app.revicion', 'app.componente', 'app.asignacion', 'app.laboratorio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Equipos = new TestEquiposController();
		$this->Equipos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equipos);

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
