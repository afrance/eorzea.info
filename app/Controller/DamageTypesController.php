<?php
App::uses('AppController', 'Controller');
/**
 * DamageTypes Controller
 *
 * @property DamageType $DamageType
 * @property PaginatorComponent $Paginator
 */
class DamageTypesController extends AppController {

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
		$this->DamageType->recursive = 0;
		$this->set('damageTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DamageType->exists($id)) {
			throw new NotFoundException(__('Invalid damage type'));
		}
		$options = array('conditions' => array('DamageType.' . $this->DamageType->primaryKey => $id));
		$this->set('damageType', $this->DamageType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DamageType->create();
			if ($this->DamageType->save($this->request->data)) {
				$this->Session->setFlash(__('The damage type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The damage type could not be saved. Please, try again.'));
			}
		}
		$encounters = $this->DamageType->Encounter->find('list');
		$combatants = $this->DamageType->Combatant->find('list');
		$this->set(compact('encounters', 'combatants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DamageType->exists($id)) {
			throw new NotFoundException(__('Invalid damage type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DamageType->save($this->request->data)) {
				$this->Session->setFlash(__('The damage type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The damage type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DamageType.' . $this->DamageType->primaryKey => $id));
			$this->request->data = $this->DamageType->find('first', $options);
		}
		$encounters = $this->DamageType->Encounter->find('list');
		$combatants = $this->DamageType->Combatant->find('list');
		$this->set(compact('encounters', 'combatants'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DamageType->id = $id;
		if (!$this->DamageType->exists()) {
			throw new NotFoundException(__('Invalid damage type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DamageType->delete()) {
			$this->Session->setFlash(__('The damage type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The damage type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
