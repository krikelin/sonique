<?php
App::uses('AppController', 'Controller');
/**
 * Qis Controller
 *
 * @property Qi $Qi
 */
class QisController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Qi->recursive = 0;
		$this->set('qis', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Qi->exists($id)) {
			throw new NotFoundException(__('Invalid qi'));
		}
		$options = array('conditions' => array('Qi.' . $this->Qi->primaryKey => $id));
		$this->set('qi', $this->Qi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Qi->create();
			if ($this->Qi->save($this->request->data)) {
				$this->Session->setFlash(__('The qi has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qi could not be saved. Please, try again.'));
			}
		}
		$users = $this->Qi->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Qi->exists($id)) {
			throw new NotFoundException(__('Invalid qi'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Qi->save($this->request->data)) {
				$this->Session->setFlash(__('The qi has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Qi.' . $this->Qi->primaryKey => $id));
			$this->request->data = $this->Qi->find('first', $options);
		}
		$users = $this->Qi->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Qi->id = $id;
		if (!$this->Qi->exists()) {
			throw new NotFoundException(__('Invalid qi'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Qi->delete()) {
			$this->Session->setFlash(__('Qi deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Qi was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Qi->recursive = 0;
		$this->set('qis', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Qi->exists($id)) {
			throw new NotFoundException(__('Invalid qi'));
		}
		$options = array('conditions' => array('Qi.' . $this->Qi->primaryKey => $id));
		$this->set('qi', $this->Qi->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Qi->create();
			if ($this->Qi->save($this->request->data)) {
				$this->Session->setFlash(__('The qi has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qi could not be saved. Please, try again.'));
			}
		}
		$users = $this->Qi->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Qi->exists($id)) {
			throw new NotFoundException(__('Invalid qi'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Qi->save($this->request->data)) {
				$this->Session->setFlash(__('The qi has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qi could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Qi.' . $this->Qi->primaryKey => $id));
			$this->request->data = $this->Qi->find('first', $options);
		}
		$users = $this->Qi->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Qi->id = $id;
		if (!$this->Qi->exists()) {
			throw new NotFoundException(__('Invalid qi'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Qi->delete()) {
			$this->Session->setFlash(__('Qi deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Qi was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
