<?php
App::uses('AppController', 'Controller');
/**
 * Cursos Controller
 *
 * @property Curso $Curso
 */
class CursosController extends AppController {
public $plugings = array('', );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		}
		$tipos = $this->Curso->Tipo->find('list');
		$this->set(compact('tipos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Curso->read(null, $id);
		}
		$tipos = $this->Curso->Tipo->find('list');
		$this->set(compact('tipos'));
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
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->Curso->delete()) {
			$this->Session->setFlash(__('Curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * adm_index method
 *
 * @return void
 */
	public function adm_index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
	}

/**
 * adm_view method
 *
 * @param string $id
 * @return void
 */
	public function adm_view($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
	}

/**
 * adm_add method
 *
 * @return void
 */
	public function adm_add() {
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		}
		$tipos = $this->Curso->Tipo->find('list');
		$this->set(compact('tipos'));
	}

/**
 * adm_edit method
 *
 * @param string $id
 * @return void
 */
	public function adm_edit($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Curso->read(null, $id);
		}
		$tipos = $this->Curso->Tipo->find('list');
		$this->set(compact('tipos'));
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
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->Curso->delete()) {
			$this->Session->setFlash(__('Curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
