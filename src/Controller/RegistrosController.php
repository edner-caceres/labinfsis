<?php

App::uses('AppController', 'Controller');

/**
 * Registros Controller
 *
 * @property Registro $Registro
 */
class RegistrosController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Registro->recursive = 0;
        $this->set('registros', $this->paginate());
    }

    public function ingresar() {
        if ($this->request->is('post')) {
            $this->Registro->create();
            if ($this->Registro->save($this->request->data)) {
                $this->Session->setFlash(__('The registro has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The registro could not be saved. Please, try again.'));
            }
        }
        $cuentas = $this->Registro->Cuenta->find('list');
        $personas = $this->Registro->Persona->find('list');
        $equipos = $this->Registro->Equipo->find('list');
        $cursos = $this->Registro->Curso->find('list');
        $this->set(compact('cuentas', 'personas', 'equipos', 'cursos'));
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        $this->set('registro', $this->Registro->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Registro->create();
            if ($this->Registro->save($this->request->data)) {
                $this->Session->setFlash(__('The registro has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The registro could not be saved. Please, try again.'));
            }
        }
        $cuentas = $this->Registro->Cuenta->find('list');
        $personas = $this->Registro->Persona->find('list');
        $equipos = $this->Registro->Equipo->find('list');
        $cursos = $this->Registro->Curso->find('list');
        $this->set(compact('cuentas', 'personas', 'equipos', 'cursos'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Registro->save($this->request->data)) {
                $this->Session->setFlash(__('The registro has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The registro could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Registro->read(null, $id);
        }
        $cuentas = $this->Registro->Cuenta->find('list');
        $personas = $this->Registro->Persona->find('list');
        $equipos = $this->Registro->Equipo->find('list');
        $cursos = $this->Registro->Curso->find('list');
        $this->set(compact('cuentas', 'personas', 'equipos', 'cursos'));
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
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        if ($this->Registro->delete()) {
            $this->Session->setFlash(__('Registro deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Registro was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->Registro->recursive = 0;
        $this->set('registros', $this->paginate());
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        $this->set('registro', $this->Registro->read(null, $id));
    }

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
            $this->Registro->create();
            if ($this->Registro->save($this->request->data)) {
                $this->Session->setFlash(__('The registro has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The registro could not be saved. Please, try again.'));
            }
        }
        $cuentas = $this->Registro->Cuenta->find('list');
        $personas = $this->Registro->Persona->find('list');
        $equipos = $this->Registro->Equipo->find('list');
        $cursos = $this->Registro->Curso->find('list');
        $this->set(compact('cuentas', 'personas', 'equipos', 'cursos'));
    }

    /**
     * adm_edit method
     *
     * @param string $id
     * @return void
     */
    public function adm_edit($id = null) {
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Registro->save($this->request->data)) {
                $this->Session->setFlash(__('The registro has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The registro could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Registro->read(null, $id);
        }
        $cuentas = $this->Registro->Cuenta->find('list');
        $personas = $this->Registro->Persona->find('list');
        $equipos = $this->Registro->Equipo->find('list');
        $cursos = $this->Registro->Curso->find('list');
        $this->set(compact('cuentas', 'personas', 'equipos', 'cursos'));
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
        $this->Registro->id = $id;
        if (!$this->Registro->exists()) {
            throw new NotFoundException(__('Invalid registro'));
        }
        if ($this->Registro->delete()) {
            $this->Session->setFlash(__('Registro deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Registro was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
