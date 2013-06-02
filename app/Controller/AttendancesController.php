<?php
App::uses('AppController', 'Controller');
/**
 * Attendances Controller
 *
 * @property Attendance $Attendance
 */
class AttendancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attendance->recursive = 0;
		$this->set('attendances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
		$this->set('attendance', $this->Attendance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendance->create();
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}
		$users = $this->Attendance->User->find('list');
		$lessions = $this->Attendance->Lession->find('list');
		$this->set(compact('users', 'lessions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
			$this->request->data = $this->Attendance->find('first', $options);
		}
		$users = $this->Attendance->User->find('list');
		$lessions = $this->Attendance->Lession->find('list');
		$this->set(compact('users', 'lessions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendance->delete()) {
			$this->Session->setFlash(__('Attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Attendance->recursive = 0;
		$this->set('attendances', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
		$this->set('attendance', $this->Attendance->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Attendance->create();
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}
		$users = $this->Attendance->User->find('list');
		$lessions = $this->Attendance->Lession->find('list');
		$this->set(compact('users', 'lessions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Attendance->exists($id)) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attendance.' . $this->Attendance->primaryKey => $id));
			$this->request->data = $this->Attendance->find('first', $options);
		}
		$users = $this->Attendance->User->find('list');
		$lessions = $this->Attendance->Lession->find('list');
		$this->set(compact('users', 'lessions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendance->delete()) {
			$this->Session->setFlash(__('Attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
