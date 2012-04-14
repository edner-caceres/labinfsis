<?php
App::uses('AppController', 'Controller');
/**
 * Estados Controller
 *
 * @property Estado $Estado
 */
class EstadosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estado->create();
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('The estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado could not be saved. Please, try again.'));
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
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('The estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Estado->read(null, $id);
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
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		if ($this->Estado->delete()) {
			$this->Session->setFlash(__('Estado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Estado->create();
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('The estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado could not be saved. Please, try again.'));
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
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estado->save($this->request->data)) {
				$this->Session->setFlash(__('The estado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Estado->read(null, $id);
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
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		if ($this->Estado->delete()) {
			$this->Session->setFlash(__('Estado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
