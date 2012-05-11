<?php

App::uses('AppController', 'Controller');

/**
 * Laboratorios Controller
 *
 * @property Laboratorio $Laboratorio
 */
class LaboratoriosController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = 'ajax';
        $this->Laboratorio->recursive = 0;
        $this->Laboratorio->order = 'Laboratorio.nombre_laboratorio';
        $this->set('laboratorios', $this->Laboratorio->find('all'));
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        $this->set('laboratorio', $this->Laboratorio->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Laboratorio->create();
            if ($this->Laboratorio->save($this->request->data)) {
                $this->Session->setFlash(__('The laboratorio has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The laboratorio could not be saved. Please, try again.'));
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
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Laboratorio->save($this->request->data)) {
                $this->Session->setFlash(__('The laboratorio has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The laboratorio could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Laboratorio->read(null, $id);
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
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        if ($this->Laboratorio->delete()) {
            $this->Session->setFlash(__('Laboratorio deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Laboratorio was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->Laboratorio->recursive = 0;
        $this->Laboratorio->order = 'Laboratorio.nombre_laboratorio';
        $this->set('laboratorios', $this->paginate());
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        $this->set('laboratorio', $this->Laboratorio->read(null, $id));
    }

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
            $this->Laboratorio->create();
            if ($this->Laboratorio->save($this->request->data)) {
                $this->Session->setFlash(__('The laboratorio has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The laboratorio could not be saved. Please, try again.'));
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
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Laboratorio->save($this->request->data)) {
                $this->Session->setFlash(__('The laboratorio has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The laboratorio could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Laboratorio->read(null, $id);
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
        $this->Laboratorio->id = $id;
        if (!$this->Laboratorio->exists()) {
            throw new NotFoundException(__('Invalid laboratorio'));
        }
        if ($this->Laboratorio->delete()) {
            $this->Session->setFlash(__('Laboratorio deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Laboratorio was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
