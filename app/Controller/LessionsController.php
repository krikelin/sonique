<?php
App::uses('AppController', 'Controller');
/**
 * Lessions Controller
 *
 * @property Lession $Lession
 */
class LessionsController extends AppController {
	var $components = array('Auth');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lession->recursive = 0;

		$this->Lession->conditions = array('Lession.tutor_id' => $this->Auth->user('id'));

		if(isset($this->request->query['date'])) {
			$this->Lession->conditions = array('Lession.tutor_id' => $this->Auth->user('id'), 'Lession.time' => $this->request->query['date']);
		}
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
		$courseClasses = $this->Lession->CourseClass->find('list');
		$halls = $this->Lession->Hall->find('list');
		$tutors = $this->Lession->Tutor->find('list');
		$this->set(compact('courses', 'courseClasses', 'halls', 'tutors'));
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
		$courseClasses = $this->Lession->CourseClass->find('list');
		$halls = $this->Lession->Hall->find('list');
		$tutors = $this->Lession->Tutor->find('list');
		$this->set(compact('courses', 'courseClasses', 'halls', 'tutors'));
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
		$this->Lession->order = array('Lession.time DESC');
		$this->set('lessions', $this->paginate());
		$this->render('admin_index');
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
			$repeat = 1;
			$interval = 7;
			if(isset($this->request->data['Lession']['repeat'])) {
				$repeat = (int)$this->request->data['Lession']['repeat'];

				unset($this->request->data['Lession']['repeat']);
			}
			if(isset($this->request->data['Lession']['interval'])) {
				$interval = (int)$this->request->data['Lession']['interval'];
				unset($this->request->data['Lession']['interval']);
			}


			$this->Lession->create();
			if ($this->Lession->save($this->request->data)) {
				$this->Session->setFlash(__('The lession has been saved'));
				$date =  $this->request->data['Lession']['time'];
				print_r($this->request->data);
				$date = $this->Lession->deconstruct('time', $date);
				// Repeat for every week
				for($i = 0; $i < (int)($repeat)-1; $i++) {
				//	print $i."<br/>";


					//print $date." +".$interval * $i . " DAYS<br/>";
					$time = strtotime( $date." +".$interval * ($i + 1) . " DAYS");
					//print $time;
					//$date +=  60 * 60 * 24 * $interval * $i; // add one week
				//	$time =  array('year' => date('Y', $time), 'month' => date('m', $time), 'day' => date('d', $time), 'hour' => date('H', $time), 'min' => date('i', $time), 'meridian' => date('a', $time));
					unset($this->request->data['Lession']['time']);
					$this->request->data['Lession']['time'] = date('Y-m-d H:i:s', $time);	
				//	print_r($time)."<br>";
					$this->Lession->create();
					$this->Lession->save($this->request->data);
					print $this->Lession->id."<br/>";

				}
			//	die("C");
				$this->redirect(array('action' => 'index'));

			} else {
				$this->Session->setFlash(__('The lession could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Lession->Course->find('list');
		$course_classes = $this->Lession->CourseClass->find('list');
		$tutors = $this->Lession->Tutor->find('list');
		$halls = $this->Lession->Hall->find('list');
		$this->set(compact('courses', 'course_classes', 'halls', 'tutors'));
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
		$courseClasses = $this->Lession->CourseClass->find('list');
		$halls = $this->Lession->Hall->find('list');
		$tutors = $this->Lession->Tutor->find('list');
		$this->set(compact('courses', 'courseClasses', 'halls', 'tutors'));
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
	public function admin_deleteall($id = null) {
		$this->Lession->id = $id;
		$this->Lession->deleteAll(array('token' => $id));
		$this->Session->setFlash(__('Lession was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
