<?php
App::uses('AppController', 'Controller');
/**
 * Combatants Controller
 *
 * @property Combatant $Combatant
 * @property PaginatorComponent $Paginator
 */
class CombatantsController extends AppController {

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
		$this->Combatant->recursive = 0;
		$this->set('combatants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Combatant->exists($id)) {
			throw new NotFoundException(__('Invalid combatant'));
		}
		$options = array('conditions' => array('Combatant.' . $this->Combatant->primaryKey => $id));
		$this->set('combatant', $this->Combatant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Combatant->create();
			if ($this->Combatant->save($this->request->data)) {
				$this->Session->setFlash(__('The combatant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combatant could not be saved. Please, try again.'));
			}
		}
		$encounters = $this->Combatant->Encounter->find('list');
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
		if (!$this->Combatant->exists($id)) {
			throw new NotFoundException(__('Invalid combatant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Combatant->save($this->request->data)) {
				$this->Session->setFlash(__('The combatant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combatant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Combatant.' . $this->Combatant->primaryKey => $id));
			$this->request->data = $this->Combatant->find('first', $options);
		}
		$encounters = $this->Combatant->Encounter->find('list');
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
		$this->Combatant->id = $id;
		if (!$this->Combatant->exists()) {
			throw new NotFoundException(__('Invalid combatant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Combatant->delete()) {
			$this->Session->setFlash(__('The combatant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The combatant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
