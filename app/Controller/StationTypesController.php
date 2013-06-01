<?php
App::uses('AppController', 'Controller');
/**
 * StationTypes Controller
 *
 * @property StationType $StationType
 */
class StationTypesController extends AppController {
	public $components = array('Auth');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StationType->recursive = 0;
		
		$this->set('stationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StationType->exists($id)) {
			throw new NotFoundException(__('Invalid station type'));
		}
		$options = array('conditions' => array('StationType.' . $this->StationType->primaryKey => $id));
		$this->set('stationType', $this->StationType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StationType->create();
			if ($this->StationType->save($this->request->data)) {
				$this->Session->setFlash(__('The station type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station type could not be saved. Please, try again.'));
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
		if (!$this->StationType->exists($id)) {
			throw new NotFoundException(__('Invalid station type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StationType->save($this->request->data)) {
				$this->Session->setFlash(__('The station type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StationType.' . $this->StationType->primaryKey => $id));
			$this->request->data = $this->StationType->find('first', $options);
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
		$this->StationType->id = $id;
		if (!$this->StationType->exists()) {
			throw new NotFoundException(__('Invalid station type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StationType->delete()) {
			$this->Session->setFlash(__('Station type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Station type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StationType->recursive = 0;
		$this->set('stationTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StationType->exists($id)) {
			throw new NotFoundException(__('Invalid station type'));
		}
		$options = array('conditions' => array('StationType.' . $this->StationType->primaryKey => $id));
		$this->set('stationType', $this->StationType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StationType->create();
			if ($this->StationType->save($this->request->data)) {
				$this->Session->setFlash(__('The station type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station type could not be saved. Please, try again.'));
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
		if (!$this->StationType->exists($id)) {
			throw new NotFoundException(__('Invalid station type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StationType->save($this->request->data)) {
				$this->Session->setFlash(__('The station type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StationType.' . $this->StationType->primaryKey => $id));
			$this->request->data = $this->StationType->find('first', $options);
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
		$this->StationType->id = $id;
		if (!$this->StationType->exists()) {
			throw new NotFoundException(__('Invalid station type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StationType->delete()) {
			$this->Session->setFlash(__('Station type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Station type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
