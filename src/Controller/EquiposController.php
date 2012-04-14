<?php
App::uses('AppController', 'Controller');
/**
 * Equipos Controller
 *
 * @property Equipo $Equipo
 */
class EquiposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		$this->set('equipo', $this->Equipo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Equipo->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Equipo->read(null, $id);
		}
		$estados = $this->Equipo->Estado->find('list');
		$this->set(compact('estados'));
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
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->Equipo->delete()) {
			$this->Session->setFlash(__('Equipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		$this->set('equipo', $this->Equipo->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Equipo->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * adm_edit method
 *
 * @param string $id
 * @return void
 */
	public function adm_edit($id = null) {
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash(__('The equipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Equipo->read(null, $id);
		}
		$estados = $this->Equipo->Estado->find('list');
		$this->set(compact('estados'));
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
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->Equipo->delete()) {
			$this->Session->setFlash(__('Equipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Equipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
