<?php

App::uses('AppController', 'Controller');

/**
 * Fabricantes Controller
 *
 * @property Fabricante $Fabricante
 */
class FabricantesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = 'ajax';

        $this->Fabricante->recursive = 0;
        $this->set('fabricantes', $this->Fabricante->find('all'));
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Fabricante->id = $id;
        if (!$this->Fabricante->exists()) {
            throw new NotFoundException(__('Invalid fabricante'));
        }
        $this->set('fabricante', $this->Fabricante->read(null, $id));
    }

    

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->layout = 'ajax';
        $this->Fabricante->recursive = 0;
        $this->set('fabricantes', $this->Fabricante->find('all'));
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Fabricante->id = $id;
        if (!$this->Fabricante->exists()) {
            throw new NotFoundException(__('Invalid fabricante'));
        }
        $this->set('fabricante', $this->Fabricante->read(null, $id));
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
            $this->data = array('Fabricante' => (array) $datos);
            $this->Fabricante->create();
            if ($this->Fabricante->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Fabricante->id);
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
            $this->data = array('Fabricante' => (array) $datos);
            $this->Fabricante->id = $this->data['Fabricante']['id'];
            if ($this->Fabricante->save($this->data)) {
                $success = true;
                $this->set('fabricantes', $this->Fabricante->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Fabricante' => array());
            foreach ($datos as $fabricante_data) {
                $fabricante = array('Fabricante' => (array) $fabricante_data);
                $this->Fabricante->id = $fabricante['Fabricante']['id'];
                if ($this->Fabricante->save($laboratorio)) {
                    $success = true;
                    array_push($resp['Fabricante'], $fabricante['Fabricante']);
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
        $fabricantes = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($fabricantes) == 1) {
            $result = TRUE;
            $this->Fabricante->id = $fabricantes->id;
            if (!$this->Fabricante->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Fabricante->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($fabricantes as $fabricante) {
                $this->Fabricante->id = $fabricante->id;
                if (!$this->Fabricante->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Fabricante->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
