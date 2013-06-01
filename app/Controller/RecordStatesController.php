<?php
App::uses('AppController', 'Controller');
/**
 * RecordStates Controller
 *
 * @property RecordState $RecordState
 */
class RecordStatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecordState->recursive = 0;
		$this->set('recordStates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecordState->exists($id)) {
			throw new NotFoundException(__('Invalid record state'));
		}
		$options = array('conditions' => array('RecordState.' . $this->RecordState->primaryKey => $id));
		$this->set('recordState', $this->RecordState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecordState->create();
			if ($this->RecordState->save($this->request->data)) {
				$this->Session->setFlash(__('The record state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record state could not be saved. Please, try again.'));
			}
		}
		$records = $this->RecordState->Record->find('list');
		$this->set(compact('records'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecordState->exists($id)) {
			throw new NotFoundException(__('Invalid record state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecordState->save($this->request->data)) {
				$this->Session->setFlash(__('The record state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecordState.' . $this->RecordState->primaryKey => $id));
			$this->request->data = $this->RecordState->find('first', $options);
		}
		$records = $this->RecordState->Record->find('list');
		$this->set(compact('records'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecordState->id = $id;
		if (!$this->RecordState->exists()) {
			throw new NotFoundException(__('Invalid record state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecordState->delete()) {
			$this->Session->setFlash(__('Record state deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Record state was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RecordState->recursive = 0;
		$this->set('recordStates', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RecordState->exists($id)) {
			throw new NotFoundException(__('Invalid record state'));
		}
		$options = array('conditions' => array('RecordState.' . $this->RecordState->primaryKey => $id));
		$this->set('recordState', $this->RecordState->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RecordState->create();
			if ($this->RecordState->save($this->request->data)) {
				$this->Session->setFlash(__('The record state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record state could not be saved. Please, try again.'));
			}
		}
		$records = $this->RecordState->Record->find('list');
		$this->set(compact('records'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RecordState->exists($id)) {
			throw new NotFoundException(__('Invalid record state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecordState->save($this->request->data)) {
				$this->Session->setFlash(__('The record state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The record state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecordState.' . $this->RecordState->primaryKey => $id));
			$this->request->data = $this->RecordState->find('first', $options);
		}
		$records = $this->RecordState->Record->find('list');
		$this->set(compact('records'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RecordState->id = $id;
		if (!$this->RecordState->exists()) {
			throw new NotFoundException(__('Invalid record state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecordState->delete()) {
			$this->Session->setFlash(__('Record state deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Record state was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
