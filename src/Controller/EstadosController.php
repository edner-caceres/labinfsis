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
        $this->layout = 'ajax';
        $this->Estado->recursive = 0;
        $this->set('estados', $this->Estado->find('all'));
    }

    

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
          $this->layout = 'ajax';
        if (!empty($this->data)) {
            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
            $this->data = array('Estado' => (array) $datos);
            $this->Estado->create();
            if ($this->Estado->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Estado->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2); // mo se recibieron datos para guardar
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
        $this->layout = 'ajax';

        $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Estado' => (array) $datos);
            $this->Estado->id = $this->data['Estado']['id'];
            if ($this->Estado->save($this->data)) {
                $success = true;
                $this->set('estados', $this->Estado->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Estado' => array());
            foreach ($datos as $estado_data) {
                $estado = array('Estado' => (array) $estado_data);
                $this->Estado->id = $estado['Estado']['id'];
                if ($this->Estado->save($estado)) {
                    $success = true;
                    array_push($resp['Estado'], $estado['Estado']);
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
        $estados = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($estados) == 1) {
            $result = TRUE;
            $this->Estado->id = $estados->id;
            if (!$this->Estado->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Estado->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($estados as $estado) {
                $this->Estado->id = $estado->id;
                if (!$this->Estado->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Estado->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
