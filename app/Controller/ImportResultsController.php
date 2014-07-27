<?php
App::uses('AppController', 'Controller');
/**
 * ImportResults Controller
 *
 * @property ImportResult $ImportResult
 * @property PaginatorComponent $Paginator
 */
class ImportResultsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ImportResult->recursive = 0;
		$this->set('importResults', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImportResult->exists($id)) {
			throw new NotFoundException(__('Invalid import result'));
		}
		$options = array('conditions' => array('ImportResult.' . $this->ImportResult->primaryKey => $id));
		$this->set('importResult', $this->ImportResult->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImportResult->create();
			if ($this->ImportResult->save($this->request->data)) {
				$this->Session->setFlash(__('The import result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The import result could not be saved. Please, try again.'));
			}
		}
		$encounters = $this->ImportResult->Encounter->find('list');
		$this->set(compact('encounters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ImportResult->exists($id)) {
			throw new NotFoundException(__('Invalid import result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ImportResult->save($this->request->data)) {
				$this->Session->setFlash(__('The import result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The import result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImportResult.' . $this->ImportResult->primaryKey => $id));
			$this->request->data = $this->ImportResult->find('first', $options);
		}
		$encounters = $this->ImportResult->Encounter->find('list');
		$this->set(compact('encounters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ImportResult->id = $id;
		if (!$this->ImportResult->exists()) {
			throw new NotFoundException(__('Invalid import result'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ImportResult->delete()) {
			$this->Session->setFlash(__('The import result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The import result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
