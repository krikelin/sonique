<?php
App::uses('AppController', 'Controller');
/**
 * CourseClassUsers Controller
 *
 * @property CourseClassUser $CourseClassUser
 */
class CourseClassUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseClassUser->recursive = 0;
		$this->set('courseClassUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseClassUser->exists($id)) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		$options = array('conditions' => array('CourseClassUser.' . $this->CourseClassUser->primaryKey => $id));
		$this->set('courseClassUser', $this->CourseClassUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseClassUser->create();
			if ($this->CourseClassUser->save($this->request->data)) {
				$this->Session->setFlash(__('The course class user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class user could not be saved. Please, try again.'));
			}
		}
		$users = $this->CourseClassUser->User->find('list');
		$courseClasses = $this->CourseClassUser->CourseClass->find('list');
		$courses = $this->CourseClassUser->Course->find('list');
		$marks = $this->CourseClassUser->Mark->find('list');
		$this->set(compact('users', 'courseClasses', 'courses', 'marks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CourseClassUser->exists($id)) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseClassUser->save($this->request->data)) {
				$this->Session->setFlash(__('The course class user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseClassUser.' . $this->CourseClassUser->primaryKey => $id));
			$this->request->data = $this->CourseClassUser->find('first', $options);
		}
		$users = $this->CourseClassUser->User->find('list');
		$courseClasses = $this->CourseClassUser->CourseClass->find('list');
		$courses = $this->CourseClassUser->Course->find('list');
		$marks = $this->CourseClassUser->Mark->find('list');
		$this->set(compact('users', 'courseClasses', 'courses', 'marks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CourseClassUser->id = $id;
		if (!$this->CourseClassUser->exists()) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CourseClassUser->delete()) {
			$this->Session->setFlash(__('Course class user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course class user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CourseClassUser->recursive = 0;
		$this->set('courseClassUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CourseClassUser->exists($id)) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		$options = array('conditions' => array('CourseClassUser.' . $this->CourseClassUser->primaryKey => $id));
		$this->set('courseClassUser', $this->CourseClassUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CourseClassUser->create();
			if ($this->CourseClassUser->save($this->request->data)) {
				$this->Session->setFlash(__('The course class user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class user could not be saved. Please, try again.'));
			}
		}
		$users = $this->CourseClassUser->User->find('list');
		$courseClasses = $this->CourseClassUser->CourseClass->find('list');
		$courses = $this->CourseClassUser->Course->find('list');
		$marks = $this->CourseClassUser->Mark->find('list');
		$this->set(compact('users', 'courseClasses', 'courses', 'marks'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CourseClassUser->exists($id)) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseClassUser->save($this->request->data)) {
				$this->Session->setFlash(__('The course class user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseClassUser.' . $this->CourseClassUser->primaryKey => $id));
			$this->request->data = $this->CourseClassUser->find('first', $options);
		}
		$users = $this->CourseClassUser->User->find('list');
		$courseClasses = $this->CourseClassUser->CourseClass->find('list');
		$courses = $this->CourseClassUser->Course->find('list');
		$marks = $this->CourseClassUser->Mark->find('list');
		$this->set(compact('users', 'courseClasses', 'courses', 'marks'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CourseClassUser->id = $id;
		if (!$this->CourseClassUser->exists()) {
			throw new NotFoundException(__('Invalid course class user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CourseClassUser->delete()) {
			$this->Session->setFlash(__('Course class user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course class user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
