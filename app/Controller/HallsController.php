<?php
App::uses('AppController', 'Controller');
/**
 * Halls Controller
 *
 * @property Hall $Hall
 */
class HallsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hall->recursive = 0;
		$this->set('halls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hall->exists($id)) {
			throw new NotFoundException(__('Invalid hall'));
		}
		$options = array('conditions' => array('Hall.' . $this->Hall->primaryKey => $id));
		$this->set('hall', $this->Hall->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hall->create();
			if ($this->Hall->save($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hall->exists($id)) {
			throw new NotFoundException(__('Invalid hall'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hall->save($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hall.' . $this->Hall->primaryKey => $id));
			$this->request->data = $this->Hall->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hall->id = $id;
		if (!$this->Hall->exists()) {
			throw new NotFoundException(__('Invalid hall'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hall->delete()) {
			$this->Session->setFlash(__('Hall deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hall was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Hall->recursive = 0;
		$this->set('halls', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Hall->exists($id)) {
			throw new NotFoundException(__('Invalid hall'));
		}
		$options = array('conditions' => array('Hall.' . $this->Hall->primaryKey => $id));
		$this->set('hall', $this->Hall->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Hall->create();
			if ($this->Hall->save($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Hall->exists($id)) {
			throw new NotFoundException(__('Invalid hall'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hall->save($this->request->data)) {
				$this->Session->setFlash(__('The hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hall.' . $this->Hall->primaryKey => $id));
			$this->request->data = $this->Hall->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Hall->id = $id;
		if (!$this->Hall->exists()) {
			throw new NotFoundException(__('Invalid hall'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hall->delete()) {
			$this->Session->setFlash(__('Hall deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hall was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
