<?php
App::uses('AppController', 'Controller');
/**
 * Swings Controller
 *
 * @property Swing $Swing
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SwingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Swing->recursive = 0;
		
		if ($this->request->is('requested')) {
			return $this->Paginator->paginate();
        } else {
			$this->set('swings', $this->Paginator->paginate());
        }
		
	}
	
	
	public function heavy-hitters() {
		$this->Swing->recursive = 0;
		$options = array(
			'conditions' => array('Swing.attacker' => '),
			'order' => array('Swing.damage'),
			'limit' => 5
		);
		
		if ($this->request->is('requested')) {
			return $this->Swing->find('list', $options)
        } 		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Swing->exists($id)) {
			throw new NotFoundException(__('Invalid swing'));
		}
		$options = array('conditions' => array('Swing.' . $this->Swing->primaryKey => $id));
		$this->set('swing', $this->Swing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Swing->create();
			if ($this->Swing->save($this->request->data)) {
				$this->Session->setFlash(__('The swing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The swing could not be saved. Please, try again.'));
			}
		}
		$encounters = $this->Swing->Encounter->find('list');
		$attackers = $this->Swing->Attacker->find('list');
		$victims = $this->Swing->Victim->find('list');
		$this->set(compact('encounters', 'attackers', 'victims'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Swing->exists($id)) {
			throw new NotFoundException(__('Invalid swing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Swing->save($this->request->data)) {
				$this->Session->setFlash(__('The swing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The swing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Swing.' . $this->Swing->primaryKey => $id));
			$this->request->data = $this->Swing->find('first', $options);
		}
		$encounters = $this->Swing->Encounter->find('list');
		$attackers = $this->Swing->Attacker->find('list');
		$victims = $this->Swing->Victim->find('list');
		$this->set(compact('encounters', 'attackers', 'victims'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Swing->id = $id;
		if (!$this->Swing->exists()) {
			throw new NotFoundException(__('Invalid swing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Swing->delete()) {
			$this->Session->setFlash(__('The swing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The swing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
