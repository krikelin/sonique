<?php
App::uses('AppController', 'Controller');
/**
 * DoctrineVersions Controller
 *
 * @property DoctrineVersion $DoctrineVersion
 */
class DoctrineVersionsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DoctrineVersion->recursive = 0;

		$this->DoctrineVersion->order = array('DoctrineVersion.release_date DESC');
		$this->set('doctrineVersions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DoctrineVersion->exists($id)) {
			throw new NotFoundException(__('Invalid doctrine version'));
		}
		$options = array('conditions' => array('DoctrineVersion.' . $this->DoctrineVersion->primaryKey => $id));
		$this->set('doctrineVersion', $this->DoctrineVersion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DoctrineVersion->create();
			if ($this->DoctrineVersion->save($this->request->data)) {
				$this->Session->setFlash(__('The doctrine version has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctrine version could not be saved. Please, try again.'));
			}
		}
		$doctrines = $this->DoctrineVersion->Doctrine->find('list');
		$users = $this->DoctrineVersion->User->find('list');
		$this->set(compact('doctrines', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->DoctrineVersion->exists($id)) {
			throw new NotFoundException(__('Invalid doctrine version'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DoctrineVersion->save($this->request->data)) {
				$this->Session->setFlash(__('The doctrine version has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctrine version could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DoctrineVersion.' . $this->DoctrineVersion->primaryKey => $id));
			$this->request->data = $this->DoctrineVersion->find('first', $options);
		}
		$doctrines = $this->DoctrineVersion->Doctrine->find('list');
		$users = $this->DoctrineVersion->User->find('list');
		$this->set(compact('doctrines', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->DoctrineVersion->id = $id;
		if (!$this->DoctrineVersion->exists()) {
			throw new NotFoundException(__('Invalid doctrine version'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DoctrineVersion->delete()) {
			$this->Session->setFlash(__('Doctrine version deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Doctrine version was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
