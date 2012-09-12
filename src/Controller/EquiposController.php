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
        $this->Equipo->recursive = 2;
        $this->layout = 'ajax';
        if (isset($this->request->query['laboratorio'])) {
            $this->set('equipos', $this->Equipo->Asignacion->find('all', array(
                        'conditions' => array(
                            'Asignacion.laboratorio_id' => isset($this->request->query['laboratorio'])
                        ),
                        'order' => array('Equipo.nombre_equipo ASC')
                    )));
        } else {
            $this->set('equipos', $this->Equipo->find('all', array(
                        'order' => array('Equipo.nombre_equipo ASC')
                    )));
        }
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view() {        
        $this->layout = 'detail';
        $id = explode(',', $this->request->data['equipos']);
        $this->set('equipos', $this->Equipo->find('all', array(
            'conditions'=>  array(
                'Equipo.id' => $id
            )
        )));
        $this->set('laboratorios', $this->Equipo->Asignacion->Laboratorio->find('all'));
        
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
            $estados = $this->Equipo->Estado->find('list');
            $this->set(compact('estados'));
            $this->layout = 'ajax';
            if (!empty($this->data)) {
                $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
                $this->data = array('Equipo' => (array) $datos);
                $this->Equipo->create();
                if ($this->Equipo->save($this->data)) {
                    $this->set('guardado', 1);
                    $this->set('newID', $this->Equipo->id);
                } else {
                    $this->set('guardado', 0);
                }
            } else {
                $this->set('guardado', 2); // mo se recibieron datos para guardar
            }
        } else {
            $this->set('guardado', 2);
        }
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
        $categorias = $this->Equipo->Categoria->find('list');
        $this->set(compact('estados'));
        $this->set(compact('categorias'));
    }

    /**
     * adm_delete method
     *
     * @param string $id
     * @return void
     */
    public function adm_delete($id = null) {
        $this->layout = 'ajax';
        $equipos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($equipos) == 1) {
            $result = TRUE;
            $this->Equipo->id = $equipos->id;
            if (!$this->Equipo->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Equipo->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($equipos as $equipo) {
                $this->Equipo->id = $equipo->id;
                if (!$this->Equipo->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Equipo->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
