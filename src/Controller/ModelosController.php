<?php
App::uses('AppController', 'Controller');
/**
 * Modelos Controller
 *
 * @property Modelo $Modelo
 */
class ModelosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Modelo->recursive = 0;
		$this->set('modelos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$this->set('modelo', $this->Modelo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modelo->create();
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Modelo->read(null, $id);
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->Modelo->delete()) {
			$this->Session->setFlash(__('Modelo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modelo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Modelo->recursive = 0;
		$this->set('modelos', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$this->set('modelo', $this->Modelo->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Modelo->create();
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Modelo->read(null, $id);
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->Modelo->delete()) {
			$this->Session->setFlash(__('Modelo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modelo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
