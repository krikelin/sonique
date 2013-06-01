<?php
App::uses('AppController', 'Controller');
/**
 * Submissions Controller
 *
 * @property Submission $Submission
 */
class SubmissionsController extends AppController {
	public $components = array('Auth');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('reject', 'approve');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Submission->recursive = 0;
		$this->Submission->order = array('Submission.date_submitted DESC');
		$this->Submission->conditions = array('Submission.user_id' => $this->Auth->user('id'));
		$this->set('submissions', $this->paginate());
	}
	public function reject($id) {
		$this->Submission->read(null, $id);
		$this->Submission->set('submission_status_id', 3);
		$this->Submission->save();

	}
	public function approve($id) {
		$this->Submission->read(null, $id);
		$this->Submission->set('submission_status_id', 2);
		$this->Submission->save();
		
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
		$this->set('submission', $this->Submission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Submission->create();
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}
		$users = $this->Submission->User->find('list');
		$stations = $this->Submission->Station->find('list');
		$records = $this->Submission->Record->find('list');
		$submissionStatuses = $this->Submission->SubmissionStatus->find('list');
		$this->set(compact('users', 'stations', 'records', 'submissionStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
			$this->request->data = $this->Submission->find('first', $options);
		}
		$users = $this->Submission->User->find('list');
		$stations = $this->Submission->Station->find('list');
		$records = $this->Submission->Record->find('list');
		$submissionStatuses = $this->Submission->SubmissionStatus->find('list');
		$this->set(compact('users', 'stations', 'records', 'submissionStatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Submission->delete()) {
			$this->Session->setFlash(__('Submission deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Submission was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Submission->recursive = 0;
		$this->set('submissions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
		$this->set('submission', $this->Submission->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Submission->create();
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}
		$users = $this->Submission->User->find('list');
		$stations = $this->Submission->Station->find('list');
		$records = $this->Submission->Record->find('list');
		$this->set(compact('users', 'stations', 'records'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
			$this->request->data = $this->Submission->find('first', $options);
		}
		$users = $this->Submission->User->find('list');
		$stations = $this->Submission->Station->find('list');
		$records = $this->Submission->Record->find('list');
		$this->set(compact('users', 'stations', 'records'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Submission->delete()) {
			$this->Session->setFlash(__('Submission deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Submission was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
