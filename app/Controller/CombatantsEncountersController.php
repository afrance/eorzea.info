<?php
App::uses('AppController', 'Controller');
/**
 * CombatantsEncounters Controller
 *
 * @property CombatantsEncounter $CombatantsEncounter
 * @property PaginatorComponent $Paginator
 */
class CombatantsEncountersController extends AppController {

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
		$this->CombatantsEncounter->recursive = 0;
		$this->set('combatantsEncounters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CombatantsEncounter->exists($id)) {
			throw new NotFoundException(__('Invalid combatants encounter'));
		}
		$options = array('conditions' => array('CombatantsEncounter.' . $this->CombatantsEncounter->primaryKey => $id));
		$this->set('combatantsEncounter', $this->CombatantsEncounter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CombatantsEncounter->create();
			if ($this->CombatantsEncounter->save($this->request->data)) {
				$this->Session->setFlash(__('The combatants encounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combatants encounter could not be saved. Please, try again.'));
			}
		}
		$combatants = $this->CombatantsEncounter->Combatant->find('list');
		$encounters = $this->CombatantsEncounter->Encounter->find('list');
		$this->set(compact('combatants', 'encounters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CombatantsEncounter->exists($id)) {
			throw new NotFoundException(__('Invalid combatants encounter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CombatantsEncounter->save($this->request->data)) {
				$this->Session->setFlash(__('The combatants encounter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combatants encounter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CombatantsEncounter.' . $this->CombatantsEncounter->primaryKey => $id));
			$this->request->data = $this->CombatantsEncounter->find('first', $options);
		}
		$combatants = $this->CombatantsEncounter->Combatant->find('list');
		$encounters = $this->CombatantsEncounter->Encounter->find('list');
		$this->set(compact('combatants', 'encounters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CombatantsEncounter->id = $id;
		if (!$this->CombatantsEncounter->exists()) {
			throw new NotFoundException(__('Invalid combatants encounter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CombatantsEncounter->delete()) {
			$this->Session->setFlash(__('The combatants encounter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The combatants encounter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
