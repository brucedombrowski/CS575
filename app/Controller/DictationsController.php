<?php
App::uses('AppController', 'Controller');
/**
 * Dictations Controller
 *
 * @property Dictation $Dictation
 */
class DictationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dictation->recursive = 0;
		$this->set('dictations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dictation->id = $id;
		if (!$this->Dictation->exists()) {
			throw new NotFoundException(__('Invalid dictation'));
		}
		$this->set('dictation', $this->Dictation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dictation->create();
			if ($this->Dictation->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Dictation->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Dictation->id = $id;
		if (!$this->Dictation->exists()) {
			throw new NotFoundException(__('Invalid dictation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dictation->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dictation->read(null, $id);
		}
		$clients = $this->Dictation->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Dictation->id = $id;
		if (!$this->Dictation->exists()) {
			throw new NotFoundException(__('Invalid dictation'));
		}
		if ($this->Dictation->delete()) {
			$this->Session->setFlash(__('Dictation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dictation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
