<?php
App::uses('AppController', 'Controller');
/**
 * CourseClasses Controller
 *
 * @property CourseClass $CourseClass
 */
class CourseClassesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseClass->recursive = 0;
		$this->set('courseClasses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CourseClass->exists($id)) {
			throw new NotFoundException(__('Invalid course class'));
		}
		$options = array('conditions' => array('CourseClass.' . $this->CourseClass->primaryKey => $id));
		$this->set('courseClass', $this->CourseClass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseClass->create();
			if ($this->CourseClass->save($this->request->data)) {
				$this->Session->setFlash(__('The course class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CourseClass->Course->find('list');
		$users = $this->CourseClass->User->find('list');
		$users = $this->CourseClass->User->find('list');
		$this->set(compact('courses', 'users', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CourseClass->exists($id)) {
			throw new NotFoundException(__('Invalid course class'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseClass->save($this->request->data)) {
				$this->Session->setFlash(__('The course class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseClass.' . $this->CourseClass->primaryKey => $id));
			$this->request->data = $this->CourseClass->find('first', $options);
		}
		$courses = $this->CourseClass->Course->find('list');
		$users = $this->CourseClass->User->find('list');
		$users = $this->CourseClass->User->find('list');
		$this->set(compact('courses', 'users', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CourseClass->id = $id;
		if (!$this->CourseClass->exists()) {
			throw new NotFoundException(__('Invalid course class'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CourseClass->delete()) {
			$this->Session->setFlash(__('Course class deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course class was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CourseClass->recursive = 0;
		$this->set('courseClasses', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CourseClass->exists($id)) {
			throw new NotFoundException(__('Invalid course class'));
		}
		$options = array('conditions' => array('CourseClass.' . $this->CourseClass->primaryKey => $id));
		$this->set('courseClass', $this->CourseClass->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CourseClass->create();
			if ($this->CourseClass->save($this->request->data)) {
				$this->Session->setFlash(__('The course class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CourseClass->Course->find('list');
		$users = $this->CourseClass->User->find('list');
		$users = $this->CourseClass->User->find('list');
		$this->set(compact('courses', 'users', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CourseClass->exists($id)) {
			throw new NotFoundException(__('Invalid course class'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseClass->save($this->request->data)) {
				$this->Session->setFlash(__('The course class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseClass.' . $this->CourseClass->primaryKey => $id));
			$this->request->data = $this->CourseClass->find('first', $options);
		}
		$courses = $this->CourseClass->Course->find('list');
		$users = $this->CourseClass->User->find('list');
		$users = $this->CourseClass->User->find('list');
		$this->set(compact('courses', 'users', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CourseClass->id = $id;
		if (!$this->CourseClass->exists()) {
			throw new NotFoundException(__('Invalid course class'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CourseClass->delete()) {
			$this->Session->setFlash(__('Course class deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course class was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
