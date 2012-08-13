<?php

App::uses('AppController', 'Controller');

/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 */
class CategoriasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = 'ajax';
        $this->Categoria->recursive = 0;
        $this->set('categorias', $this->Categoria->find('all'));
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        $this->set('categoria', $this->Categoria->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('The categoria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The categoria could not be saved. Please, try again.'));
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
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('The categoria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The categoria could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Categoria->read(null, $id);
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
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        if ($this->Categoria->delete()) {
            $this->Session->setFlash(__('Categoria deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Categoria was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * adm_index method
     *
     * @return void
     */
    public function adm_index() {
        $this->layout = 'ajax';
        $this->Categoria->recursive = 0;
        $padre = isset($this->request->query['categoria']) ? $this->request->query['categoria'] : 1;
        $this->set('categorias', $this->Categoria->find(
                        'all', array(
                    'conditions' => array(
                        'Categoria.categoria_id' => $padre
                    )
                        )
                ));
    }

    /**
     * admin_tree method
     *
     * @return void
     */
    public function adm_tree() {
        $this->Categoria->recursive = 0;
        $this->layout = 'ajax';
        $padre = $this->request->query['node'];
        $categorias = $this->Categoria->find(
                'all', array(
            'conditions' => array(
                'Categoria.categoria_id' => $padre
            )
                )
        );
        $pos = 0;
        foreach ($categorias as $categoria) {
            $childs = $this->Categoria->find('count', array(
                'conditions' => array(
                    'Categoria.categoria_id' => $categoria['Categoria']['id']
                )
                    ));
            $categorias[$pos]['Categoria']['childs'] = $childs;
            $pos++;
        }
        $this->set('categorias', $categorias);
    }

    public function adm_update($id) {
        $this->layout = 'ajax';
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
            $this->set('actualizado', FALSE);
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->set('actualizado', TRUE);
            } else {
                $this->set('actualizado', FALSE);
            }
        } else {
            $this->set('actualizado', FALSE);
        }
    }

    /**
     * adm_view method
     *
     * @param string $id
     * @return void
     */
    public function adm_view($id = null) {
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        $this->set('categoria', $this->Categoria->read(null, $id));
    }

    /**
     * adm_add method
     *
     * @return void
     */
    public function adm_add() {
        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('The categoria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The categoria could not be saved. Please, try again.'));
            }
        }
        ;
        $this->set('categorias', $this->Categoria->find('list'));
    }

    /**
     * adm_edit method
     *
     * @param string $id
     * @return void
     */
    public function adm_edit($id = null) {
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('The categoria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The categoria could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Categoria->read(null, $id);
        }
        $this->set('categorias', $this->Categoria->find('list'));
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
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Invalid categoria'));
        }
        if ($this->Categoria->delete()) {
            $this->Session->setFlash(__('Categoria deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Categoria was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
