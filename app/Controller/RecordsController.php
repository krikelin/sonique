<?php
App::uses('AppController', 'Controller');
/**
 * Records Controller
 *
 * @property Record $Record
 */
class RecordsController extends AppController {
	public $components = array('Auth');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Record->recursive = 0;
		$this->Record->conditions = array('Record.user_id' => $this->Auth->user('id'));
		$this->set('records', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
		$this->set('record', $this->Record->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Record->create();
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash(__('The record has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record could not be saved. Please, try again.'));
			}
		}
		$songs = $this->Record->Song->find('list');
		$users = $this->Record->User->find('list');
		$artists = $this->Record->Artist->find('list');
		$this->set(compact('songs', 'users', 'artists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash(__('The record has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
			$this->request->data = $this->Record->find('first', $options);
		}
		$songs = $this->Record->Song->find('list');
		$users = $this->Record->User->find('list');
		$artists = $this->Record->Artist->find('list');
		$this->set(compact('songs', 'users', 'artists'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Record->id = $id;
		if (!$this->Record->exists()) {
			throw new NotFoundException(__('Invalid record'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Record->delete()) {
			$this->Session->setFlash(__('Record deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Record was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Record->recursive = 0;
		$this->set('records', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
		$this->set('record', $this->Record->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Record->create();
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash(__('The record has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record could not be saved. Please, try again.'));
			}
		}
		$songs = $this->Record->Song->find('list');
		$users = $this->Record->User->find('list');
		$artists = $this->Record->Artist->find('list');
		$this->set(compact('songs', 'users', 'artists'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Record->exists($id)) {
			throw new NotFoundException(__('Invalid record'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash(__('The record has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Record.' . $this->Record->primaryKey => $id));
			$this->request->data = $this->Record->find('first', $options);
		}
		$songs = $this->Record->Song->find('list');
		$users = $this->Record->User->find('list');
		$artists = $this->Record->Artist->find('list');
		$this->set(compact('songs', 'users', 'artists'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Record->id = $id;
		if (!$this->Record->exists()) {
			throw new NotFoundException(__('Invalid record'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Record->delete()) {
			$this->Session->setFlash(__('Record deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Record was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
