<?php

App::uses('AppController', 'Controller');

/**
 * Asignaciones Controller
 *
 * @property Asignacion $Asignacion
 */
class AsignacionesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Asignacion->recursive = 0;
        $this->set('asignaciones', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        $this->set('asignacion', $this->Asignacion->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Asignacion->create();
            if ($this->Asignacion->save($this->request->data)) {
                $this->Session->setFlash(__('The asignacion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The asignacion could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Asignacion->Equipo->find('list');
        $laboratorios = $this->Asignacion->Laboratorio->find('list');
        $this->set(compact('equipos', 'laboratorios'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Asignacion->save($this->request->data)) {
                $this->Session->setFlash(__('The asignacion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The asignacion could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Asignacion->read(null, $id);
        }
        $equipos = $this->Asignacion->Equipo->find('list');
        $laboratorios = $this->Asignacion->Laboratorio->find('list');
        $this->set(compact('equipos', 'laboratorios'));
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
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        if ($this->Asignacion->delete()) {
            $this->Session->setFlash(__('Asignacion deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Asignacion was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->Asignacion->recursive = 0;
        $this->Asignacion->order = 'Equipo.nombre_equipo';
        $this->set('asignaciones', $this->paginate());
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        $this->set('asignacion', $this->Asignacion->read(null, $id));
    }

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
            $this->Asignacion->create();
            if ($this->Asignacion->save($this->request->data)) {
                $this->Session->setFlash(__('The asignacion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The asignacion could not be saved. Please, try again.'));
            }
        }
        $equipos = $this->Asignacion->Equipo->find('list',array('order'=>array('Equipo.nombre_equipo')));
        $laboratorios = $this->Asignacion->Laboratorio->find('list',array('order'=>array('Laboratorio.nombre_laboratorio')));
        $this->set(compact('equipos', 'laboratorios'));
    }

    /**
     * adm_edit method
     *
     * @param string $id
     * @return void
     */
    public function adm_edit($id = null) {
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Asignacion->save($this->request->data)) {
                $this->Session->setFlash(__('The asignacion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The asignacion could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Asignacion->read(null, $id);
        }
        $equipos = $this->Asignacion->Equipo->find('list');
        $laboratorios = $this->Asignacion->Laboratorio->find('list');
        $this->set(compact('equipos', 'laboratorios'));
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
        $this->Asignacion->id = $id;
        if (!$this->Asignacion->exists()) {
            throw new NotFoundException(__('Invalid asignacion'));
        }
        if ($this->Asignacion->delete()) {
            $this->Session->setFlash(__('Asignacion deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Asignacion was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
