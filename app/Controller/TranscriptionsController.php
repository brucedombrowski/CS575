<?php
App::uses('AppController', 'Controller');
/**
 * Transcriptions Controller
 *
 * @property Transcription $Transcription
 */
class TranscriptionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Transcription->recursive = 0;
		$this->set('transcriptions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Transcription->id = $id;
		if (!$this->Transcription->exists()) {
			throw new NotFoundException(__('Invalid transcription'));
		}
		$this->set('transcription', $this->Transcription->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transcription->create();
			if ($this->Transcription->save($this->request->data)) {
				$this->Session->setFlash(__('The transcription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transcription could not be saved. Please, try again.'));
			}
		}
		$dictations = $this->Transcription->Dictation->find('list');
		$assignments = $this->Transcription->Assignment->find('list');
		$this->set(compact('dictations', 'assignments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Transcription->id = $id;
		if (!$this->Transcription->exists()) {
			throw new NotFoundException(__('Invalid transcription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transcription->save($this->request->data)) {
				$this->Session->setFlash(__('The transcription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transcription could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Transcription->read(null, $id);
		}
		$dictations = $this->Transcription->Dictation->find('list');
		$assignments = $this->Transcription->Assignment->find('list');
		$this->set(compact('dictations', 'assignments'));
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
		$this->Transcription->id = $id;
		if (!$this->Transcription->exists()) {
			throw new NotFoundException(__('Invalid transcription'));
		}
		if ($this->Transcription->delete()) {
			$this->Session->setFlash(__('Transcription deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Transcription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
