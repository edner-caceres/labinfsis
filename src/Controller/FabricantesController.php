<?php
App::uses('AppController', 'Controller');
/**
 * Fabricantes Controller
 *
 * @property Fabricante $Fabricante
 */
class FabricantesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fabricante->recursive = 0;
		$this->set('fabricantes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		$this->set('fabricante', $this->Fabricante->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fabricante->create();
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('The fabricante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fabricante could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('The fabricante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fabricante could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Fabricante->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		if ($this->Fabricante->delete()) {
			$this->Session->setFlash(__('Fabricante deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fabricante was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Fabricante->recursive = 0;
		$this->set('fabricantes', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		$this->set('fabricante', $this->Fabricante->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Fabricante->create();
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('The fabricante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fabricante could not be saved. Please, try again.'));
			}
		}
	}

/**
 * adm_edit method
 *
 * @param string $id
 * @return void
 */
	public function adm_edit($id = null) {
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('The fabricante has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fabricante could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Fabricante->read(null, $id);
		}
	}

/**
 * adm_delete method
 *
 * @param string $id
 * @return void
 */
	public function adm_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Invalid fabricante'));
		}
		if ($this->Fabricante->delete()) {
			$this->Session->setFlash(__('Fabricante deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fabricante was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
