<?php
App::uses('AppController', 'Controller');
/**
 * Swings Controller
 *
 * @property Swing $Swing
 * @property PaginatorComponent $Paginator
 */
class SwingsController extends AppController {

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
		$this->Swing->recursive = 0;
		$this->set('swings', $this->Paginator->paginate());
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
