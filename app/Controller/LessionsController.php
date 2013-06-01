<?php
App::uses('AppController', 'Controller');
/**
 * Lessions Controller
 *
 * @property Lession $Lession
 */
class LessionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lession->recursive = 0;
		$this->set('lessions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lession->exists($id)) {
			throw new NotFoundException(__('Invalid lession'));
		}
		$options = array('conditions' => array('Lession.' . $this->Lession->primaryKey => $id));
		$this->set('lession', $this->Lession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lession->create();
			if ($this->Lession->save($this->request->data)) {
				$this->Session->setFlash(__('The lession has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lession could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Lession->Course->find('list');
		$users = $this->Lession->User->find('list');
		$this->set(compact('courses', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lession->exists($id)) {
			throw new NotFoundException(__('Invalid lession'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lession->save($this->request->data)) {
				$this->Session->setFlash(__('The lession has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lession could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lession.' . $this->Lession->primaryKey => $id));
			$this->request->data = $this->Lession->find('first', $options);
		}
		$courses = $this->Lession->Course->find('list');
		$users = $this->Lession->User->find('list');
		$this->set(compact('courses', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lession->id = $id;
		if (!$this->Lession->exists()) {
			throw new NotFoundException(__('Invalid lession'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lession->delete()) {
			$this->Session->setFlash(__('Lession deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lession was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Lession->recursive = 0;
		$this->set('lessions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lession->exists($id)) {
			throw new NotFoundException(__('Invalid lession'));
		}
		$options = array('conditions' => array('Lession.' . $this->Lession->primaryKey => $id));
		$this->set('lession', $this->Lession->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Lession->create();
			if ($this->Lession->save($this->request->data)) {
				$this->Session->setFlash(__('The lession has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lession could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Lession->Course->find('list');
		$users = $this->Lession->User->find('list');
		$this->set(compact('courses', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Lession->exists($id)) {
			throw new NotFoundException(__('Invalid lession'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lession->save($this->request->data)) {
				$this->Session->setFlash(__('The lession has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lession could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lession.' . $this->Lession->primaryKey => $id));
			$this->request->data = $this->Lession->find('first', $options);
		}
		$courses = $this->Lession->Course->find('list');
		$users = $this->Lession->User->find('list');
		$this->set(compact('courses', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Lession->id = $id;
		if (!$this->Lession->exists()) {
			throw new NotFoundException(__('Invalid lession'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lession->delete()) {
			$this->Session->setFlash(__('Lession deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lession was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
