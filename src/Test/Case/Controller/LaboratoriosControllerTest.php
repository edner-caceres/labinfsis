<?php
App::uses('LaboratoriosController', 'Controller');

/**
 * TestLaboratoriosController *
 */
class TestLaboratoriosController extends LaboratoriosController {
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
 * LaboratoriosController Test Case
 *
 */
class LaboratoriosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.laboratorio', 'app.asignacion', 'app.equipo', 'app.estado', 'app.movimiento', 'app.registro', 'app.revicion', 'app.componente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Laboratorios = new TestLaboratoriosController();
		$this->Laboratorios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Laboratorios);

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
