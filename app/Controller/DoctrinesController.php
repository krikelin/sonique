<?php
App::uses('AppController', 'Controller');
/**
 * Doctrines Controller
 *
 * @property Doctrine $Doctrine
 */
class DoctrinesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Doctrine->recursive = 0;
		$this->Doctrine->order = array('release_date DESC');
		$this->set('doctrines', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Doctrine->DoctrineVersion->order = array('DoctrineVersion.release_date DESC');
		if (!$this->Doctrine->exists($id)) {
			throw new NotFoundException(__('Invalid doctrine'));
		}
		$options = array('conditions' => array('Doctrine.' . $this->Doctrine->primaryKey => $id));
		$this->set('doctrine', $this->Doctrine->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Doctrine->create();
			if ($this->Doctrine->save($this->request->data)) {
				$this->Session->setFlash(__('The doctrine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctrine could not be saved. Please, try again.'));
			}
		}
		$users = $this->Doctrine->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Doctrine->exists($id)) {
			throw new NotFoundException(__('Invalid doctrine'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Doctrine->save($this->request->data)) {
				$this->Session->setFlash(__('The doctrine has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctrine could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doctrine.' . $this->Doctrine->primaryKey => $id));
			$this->request->data = $this->Doctrine->find('first', $options);
		}
		$users = $this->Doctrine->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Doctrine->id = $id;

		if (!$this->Doctrine->exists()) {
			throw new NotFoundException(__('Invalid doctrine'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Doctrine->delete()) {
			$this->Session->setFlash(__('Doctrine deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Doctrine was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
