<?php
App::uses('AppController', 'Controller');
/**
 * Households Controller
 *
 * @property Household $Household
 * @property PaginatorComponent $Paginator
 */
class HouseholdsController extends AppController {

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
		$this->Household->recursive = 0;
		$this->set('households', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Household->exists($id)) {
			throw new NotFoundException(__('Invalid household'));
		}
		$options = array('conditions' => array('Household.' . $this->Household->primaryKey => $id));
		$this->set('household', $this->Household->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Household->create();
			if ($this->Household->save($this->request->data)) {
				$this->Session->setFlash(__('The household has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The household could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$students = $this->Household->Student->find('list');
		$answers = $this->Household->Answer->find('list');
		$questions = $this->Household->Question->find('list');
		$searches = $this->Household->Search->find('list');
		$this->set(compact('students', 'answers', 'questions', 'searches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Household->id = $id;
		if (!$this->Household->exists($id)) {
			throw new NotFoundException(__('Invalid household'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Household->save($this->request->data)) {
				$this->Session->setFlash(__('The household has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The household could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Household.' . $this->Household->primaryKey => $id));
			$this->request->data = $this->Household->find('first', $options);
		}
		$students = $this->Household->Student->find('list');
		$answers = $this->Household->Answer->find('list');
		$questions = $this->Household->Question->find('list');
		$searches = $this->Household->Search->find('list');
		$this->set(compact('students', 'answers', 'questions', 'searches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Household->id = $id;
		if (!$this->Household->exists()) {
			throw new NotFoundException(__('Invalid household'));
		}
		if ($this->Household->delete()) {
			$this->Session->setFlash(__('Household deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Household was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
