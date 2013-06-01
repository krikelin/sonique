<?php
App::uses('AppController', 'Controller');
/**
 * SongStates Controller
 *
 * @property SongState $SongState
 */
class SongStatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SongState->recursive = 0;
		$this->set('songStates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SongState->exists($id)) {
			throw new NotFoundException(__('Invalid song state'));
		}
		$options = array('conditions' => array('SongState.' . $this->SongState->primaryKey => $id));
		$this->set('songState', $this->SongState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SongState->create();
			if ($this->SongState->save($this->request->data)) {
				$this->Session->setFlash(__('The song state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song state could not be saved. Please, try again.'));
			}
		}
		$songs = $this->SongState->Song->find('list');
		$this->set(compact('songs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SongState->exists($id)) {
			throw new NotFoundException(__('Invalid song state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SongState->save($this->request->data)) {
				$this->Session->setFlash(__('The song state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SongState.' . $this->SongState->primaryKey => $id));
			$this->request->data = $this->SongState->find('first', $options);
		}
		$songs = $this->SongState->Song->find('list');
		$this->set(compact('songs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SongState->id = $id;
		if (!$this->SongState->exists()) {
			throw new NotFoundException(__('Invalid song state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SongState->delete()) {
			$this->Session->setFlash(__('Song state deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Song state was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SongState->recursive = 0;
		$this->set('songStates', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SongState->exists($id)) {
			throw new NotFoundException(__('Invalid song state'));
		}
		$options = array('conditions' => array('SongState.' . $this->SongState->primaryKey => $id));
		$this->set('songState', $this->SongState->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SongState->create();
			if ($this->SongState->save($this->request->data)) {
				$this->Session->setFlash(__('The song state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song state could not be saved. Please, try again.'));
			}
		}
		$songs = $this->SongState->Song->find('list');
		$this->set(compact('songs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SongState->exists($id)) {
			throw new NotFoundException(__('Invalid song state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SongState->save($this->request->data)) {
				$this->Session->setFlash(__('The song state has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song state could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SongState.' . $this->SongState->primaryKey => $id));
			$this->request->data = $this->SongState->find('first', $options);
		}
		$songs = $this->SongState->Song->find('list');
		$this->set(compact('songs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SongState->id = $id;
		if (!$this->SongState->exists()) {
			throw new NotFoundException(__('Invalid song state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SongState->delete()) {
			$this->Session->setFlash(__('Song state deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Song state was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
