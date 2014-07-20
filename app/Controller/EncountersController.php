<?php
App::uses('AppController', 'Controller');
/**
 * Encounters Controller
 *
 * @property Encounter $Encounter
 * @property PaginatorComponent $Paginator
 */
class EncountersController extends AppController {

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
		$this->Encounter->recursive = 0;
		$this->set('encounters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Encounter->exists($id)) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		$options = array('conditions' => array('Encounter.' . $this->Encounter->primaryKey => $id));
		$this->set('encounter', $this->Encounter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Encounter->create();
			if ($this->Encounter->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter could not be saved. Please, try again.'));
			}
		}
		$combatants = $this->Encounter->Combatant->find('list');
		$this->set(compact('combatants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Encounter->exists($id)) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Encounter->save($this->request->data)) {
				$this->Session->setFlash(__('The encounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encounter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Encounter.' . $this->Encounter->primaryKey => $id));
			$this->request->data = $this->Encounter->find('first', $options);
		}
		$combatants = $this->Encounter->Combatant->find('list');
		$this->set(compact('combatants'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Encounter->id = $id;
		if (!$this->Encounter->exists()) {
			throw new NotFoundException(__('Invalid encounter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Encounter->delete()) {
			$this->Session->setFlash(__('The encounter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The encounter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
