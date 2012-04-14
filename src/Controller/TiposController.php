<?php
App::uses('AppController', 'Controller');
/**
 * Tipos Controller
 *
 * @property Tipo $Tipo
 */
class TiposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipo->recursive = 0;
		$this->set('tipos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		$this->set('tipo', $this->Tipo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.'));
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipo->read(null, $id);
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		if ($this->Tipo->delete()) {
			$this->Session->setFlash(__('Tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Tipo->recursive = 0;
		$this->set('tipos', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		$this->set('tipo', $this->Tipo->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.'));
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipo->read(null, $id);
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
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'));
		}
		if ($this->Tipo->delete()) {
			$this->Session->setFlash(__('Tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
