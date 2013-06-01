<?php
App::uses('AppController', 'Controller');
/**
 * Airplays Controller
 *
 * @property Airplay $Airplay
 */
class AirplaysController extends AppController {
	public $components = array('Auth');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Airplay->recursive = 21;
		$this->set('airplays', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Airplay->exists($id)) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		$options = array('conditions' => array('Airplay.' . $this->Airplay->primaryKey => $id));
		$this->set('airplay', $this->Airplay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Airplay->create();
			if ($this->Airplay->save($this->request->data)) {
				$this->Session->setFlash(__('The airplay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airplay could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Airplay->Station->find('list');
		$records = $this->Airplay->Record->find('list');
		$submissions = $this->Airplay->Submission->find('list');
		$this->set(compact('stations', 'records', 'submissions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Airplay->exists($id)) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Airplay->save($this->request->data)) {
				$this->Session->setFlash(__('The airplay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airplay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Airplay.' . $this->Airplay->primaryKey => $id));
			$this->request->data = $this->Airplay->find('first', $options);
		}
		$stations = $this->Airplay->Station->find('list');
		$records = $this->Airplay->Record->find('list');
		$submissions = $this->Airplay->Submission->find('list');
		$this->set(compact('stations', 'records', 'submissions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Airplay->id = $id;
		if (!$this->Airplay->exists()) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Airplay->delete()) {
			$this->Session->setFlash(__('Airplay deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Airplay was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Airplay->recursive = 0;
		$this->set('airplays', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Airplay->exists($id)) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		$options = array('conditions' => array('Airplay.' . $this->Airplay->primaryKey => $id));
		$this->set('airplay', $this->Airplay->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Airplay->create();
			if ($this->Airplay->save($this->request->data)) {
				$this->Session->setFlash(__('The airplay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airplay could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Airplay->Station->find('list');
		$records = $this->Airplay->Record->find('list');
		$submissions = $this->Airplay->Submission->find('list');
		$this->set(compact('stations', 'records', 'submissions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Airplay->exists($id)) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Airplay->save($this->request->data)) {
				$this->Session->setFlash(__('The airplay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airplay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Airplay.' . $this->Airplay->primaryKey => $id));
			$this->request->data = $this->Airplay->find('first', $options);
		}
		$stations = $this->Airplay->Station->find('list');
		$records = $this->Airplay->Record->find('list');
		$submissions = $this->Airplay->Submission->find('list');
		$this->set(compact('stations', 'records', 'submissions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Airplay->id = $id;
		if (!$this->Airplay->exists()) {
			throw new NotFoundException(__('Invalid airplay'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Airplay->delete()) {
			$this->Session->setFlash(__('Airplay deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Airplay was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
