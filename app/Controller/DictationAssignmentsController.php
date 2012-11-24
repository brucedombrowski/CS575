<?php
App::uses('AppController', 'Controller');
/**
 * DictationAssignments Controller
 *
 * @property DictationAssignment $DictationAssignment
 */
class DictationAssignmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DictationAssignment->recursive = 0;
		$this->set('dictationAssignments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		$this->set('dictationAssignment', $this->DictationAssignment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DictationAssignment->create();
			if ($this->DictationAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation assignment could not be saved. Please, try again.'));
			}
		}
		$dictations = $this->DictationAssignment->Dictation->find('list');
		$accountManagers = $this->DictationAssignment->AccountManager->find('list');
		$transcriptionists = $this->DictationAssignment->Transcriptionist->find('list');
		$this->set(compact('dictations', 'accountManagers', 'transcriptionists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DictationAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation assignment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DictationAssignment->read(null, $id);
		}
		$dictations = $this->DictationAssignment->Dictation->find('list');
		$accountManagers = $this->DictationAssignment->AccountManager->find('list');
		$transcriptionists = $this->DictationAssignment->Transcriptionist->find('list');
		$this->set(compact('dictations', 'accountManagers', 'transcriptionists'));
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
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		if ($this->DictationAssignment->delete()) {
			$this->Session->setFlash(__('Dictation assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dictation assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DictationAssignment->recursive = 0;
		$this->set('dictationAssignments', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		$this->set('dictationAssignment', $this->DictationAssignment->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DictationAssignment->create();
			if ($this->DictationAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation assignment could not be saved. Please, try again.'));
			}
		}
		$dictations = $this->DictationAssignment->Dictation->find('list');
		$accountManagers = $this->DictationAssignment->AccountManager->find('list');
		$transcriptionists = $this->DictationAssignment->Transcriptionist->find('list');
		$this->set(compact('dictations', 'accountManagers', 'transcriptionists'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DictationAssignment->save($this->request->data)) {
				$this->Session->setFlash(__('The dictation assignment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictation assignment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DictationAssignment->read(null, $id);
		}
		$dictations = $this->DictationAssignment->Dictation->find('list');
		$accountManagers = $this->DictationAssignment->AccountManager->find('list');
		$transcriptionists = $this->DictationAssignment->Transcriptionist->find('list');
		$this->set(compact('dictations', 'accountManagers', 'transcriptionists'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->DictationAssignment->id = $id;
		if (!$this->DictationAssignment->exists()) {
			throw new NotFoundException(__('Invalid dictation assignment'));
		}
		if ($this->DictationAssignment->delete()) {
			$this->Session->setFlash(__('Dictation assignment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dictation assignment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
