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
        $this->layout = 'ajax';
        if (!empty($this->data)) {
            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
            $this->data = array('Laboratorio' => (array) $datos);
            $this->Laboratorio->create();
            if ($this->Laboratorio->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Laboratorio->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2); // mo se recibieron datos para guardar
        }

    }

    /**
     * adm_edit method
     *
     * @param string $id
     * @return void
     */
    public function adm_edit($id = null) {
        
        $this->layout = 'ajax';

        $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Laboratorio' => (array) $datos);
            $this->Laboratorio->id = $this->data['Laboratorio']['id'];
            if ($this->Laboratorio->save($this->data)) {
                $success = true;
                $this->set('laboratorios', $this->Laboratorio->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Laboratorio' => array());
            foreach ($datos as $laboratorio_data) {
                $laboratorio = array('Laboratorio' => (array) $laboratorio_data);
                $this->Laboratorio->id = $laboratorio['Laboratorio']['id'];
                if ($this->Laboratorio->save($laboratorio)) {
                    $success = true;
                    array_push($resp['Laboratorio'], $laboratorio['Laboratorio']);
                }
            }
            $this->data = $resp;
        }
        $this->set('actualizado', $success);
    }

    /**
     * adm_delete method
     *
     * @param string $id
     * @return void
     */
    public function adm_delete($id = null) {
        $this->layout = 'ajax';
        $laboratorios = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($laboratorios) == 1) {
            $result = TRUE;
            $this->Laboratorio->id = $laboratorios->id;
            if (!$this->Laboratorio->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Laboratorio->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($laboratorios as $laboratorio) {
                $this->Laboratorio->id = $laboratorio->id;
                if (!$this->Laboratorio->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Laboratorio->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
