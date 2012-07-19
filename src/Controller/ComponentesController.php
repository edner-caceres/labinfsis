<?php

App::uses('AppController', 'Controller');

/**
 * Componentes Controller
 *
 * @property Componente $Componente
 */
class ComponentesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Componente->recursive = 0;
        $this->set('componentes', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        $this->set('componente', $this->Componente->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Componente->create();
            if ($this->Componente->save($this->request->data)) {
                $this->Session->setFlash(__('The componente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The componente could not be saved. Please, try again.'));
            }
        }
        $modelos = $this->Componente->Modelo->find('list');
        $fabricantes = $this->Componente->Fabricante->find('list');
        $equipos = $this->Componente->Equipo->find('list');
        $piezas = $this->Componente->Pieza->find('list');
        $estados = $this->Componente->Estado->find('list');
        $this->set(compact('modelos', 'fabricantes', 'equipos', 'piezas', 'estados'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Componente->save($this->request->data)) {
                $this->Session->setFlash(__('The componente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The componente could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Componente->read(null, $id);
        }
        $modelos = $this->Componente->Modelo->find('list');
        $fabricantes = $this->Componente->Fabricante->find('list');
        $equipos = $this->Componente->Equipo->find('list');
        $piezas = $this->Componente->Pieza->find('list');
        $estados = $this->Componente->Estado->find('list');
        $this->set(compact('modelos', 'fabricantes', 'equipos', 'piezas', 'estados'));
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
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        if ($this->Componente->delete()) {
            $this->Session->setFlash(__('Componente deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Componente was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->layout = 'ajax';
        $this->Componente->recursive = 0;
        $this->set('componentes', $this->Componente->find('all'));
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        $this->set('componente', $this->Componente->read(null, $id));
    }

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
            $this->Componente->create();
            if ($this->Componente->save($this->request->data)) {
                $this->Session->setFlash(__('The componente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The componente could not be saved. Please, try again.'));
            }
        }
        $modelos = $this->Componente->Modelo->find('list');
        $fabricantes = $this->Componente->Fabricante->find('list');
        $equipos = $this->Componente->Equipo->find('list');
        $piezas = $this->Componente->Pieza->find('list');
        $estados = $this->Componente->Estado->find('list');
        $this->set(compact('modelos', 'fabricantes', 'equipos', 'piezas', 'estados'));
    }

    /**
     * adm_edit method
     *
     * @param string $id
     * @return void
     */
    public function adm_edit($id = null) {
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Componente->save($this->request->data)) {
                $this->Session->setFlash(__('The componente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The componente could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Componente->read(null, $id);
        }
        $modelos = $this->Componente->Modelo->find('list');
        $fabricantes = $this->Componente->Fabricante->find('list');
        $equipos = $this->Componente->Equipo->find('list');
        $piezas = $this->Componente->Pieza->find('list');
        $estados = $this->Componente->Estado->find('list');
        $this->set(compact('modelos', 'fabricantes', 'equipos', 'piezas', 'estados'));
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
        $this->Componente->id = $id;
        if (!$this->Componente->exists()) {
            throw new NotFoundException(__('Invalid componente'));
        }
        if ($this->Componente->delete()) {
            $this->Session->setFlash(__('Componente deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Componente was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
