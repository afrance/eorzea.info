<?php
App::uses('AppController', 'Controller');
/**
 * AttackTypes Controller
 *
 * @property AttackType $AttackType
 * @property PaginatorComponent $Paginator
 */
class AttackTypesController extends AppController {

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
		$this->AttackType->recursive = 0;
		$this->set('attackTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttackType->exists($id)) {
			throw new NotFoundException(__('Invalid attack type'));
		}
		$options = array('conditions' => array('AttackType.' . $this->AttackType->primaryKey => $id));
		$this->set('attackType', $this->AttackType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttackType->create();
			if ($this->AttackType->save($this->request->data)) {
				$this->Session->setFlash(__('The attack type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attack type could not be saved. Please, try again.'));
			}
		}
		$encounters = $this->AttackType->Encounter->find('list');
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
		if (!$this->AttackType->exists($id)) {
			throw new NotFoundException(__('Invalid attack type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AttackType->save($this->request->data)) {
				$this->Session->setFlash(__('The attack type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attack type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AttackType.' . $this->AttackType->primaryKey => $id));
			$this->request->data = $this->AttackType->find('first', $options);
		}
		$encounters = $this->AttackType->Encounter->find('list');
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
		$this->AttackType->id = $id;
		if (!$this->AttackType->exists()) {
			throw new NotFoundException(__('Invalid attack type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AttackType->delete()) {
			$this->Session->setFlash(__('The attack type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attack type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
