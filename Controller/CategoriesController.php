<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '1')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
	
	public function beforeFilter() {
		//parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('addcategory');
	}
	
	public function addcategory() {
		
		$horas_diferencia= -5;
		$tiempo=time() + ($horas_diferencia * 60 *60);
		list($Mili, $bot) = explode(" ", microtime());
		$DM=substr(strval($Mili),2,4);
		$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
		$this->set('fecha',$fecha);
		
		$listadocategoria=$this->Category->query("select distinct category_name from category where category_initiation <= '$fecha' and category_end >= '$fecha'");
	
		$listadocategorian = '';
		foreach ($listadocategoria as $listadocategorias):
		$listadocategorian = $listadocategorian.'<option value="'.$listadocategorias['category']['category_name'].'">'.$listadocategorias['category']['category_name'].'</option>';
		endforeach;

		$this->set('listadocategorian',$listadocategorian);
	
		if ($this->request->is('post')) {
			$nombrecategoria= $this->request->data['category']['listacategorias'];
			return $this->redirect(array('controller' => 'Inscriptions', 'action' => 'add',$nombrecategoria));
		}
		
	}

	public function addcategory_admin() {
		
		$horas_diferencia= -5;
		$tiempo=time() + ($horas_diferencia * 60 *60);
		list($Mili, $bot) = explode(" ", microtime());
		$DM=substr(strval($Mili),2,4);
		$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
		$this->set('fecha',$fecha);
		
		$listadocategoria=$this->Category->query("select distinct category_name from category where category_initiation <= '$fecha' and category_end >= '$fecha'");
	
		$listadocategorian = '';
		foreach ($listadocategoria as $listadocategorias):
		$listadocategorian = $listadocategorian.'<option value="'.$listadocategorias['category']['category_name'].'">'.$listadocategorias['category']['category_name'].'</option>';
		endforeach;

		$this->set('listadocategorian',$listadocategorian);
	
		if ($this->request->is('post')) {
			$nombrecategoria= $this->request->data['category']['listacategorias'];
			return $this->redirect(array('controller' => 'Inscriptions', 'action' => 'add_admin',$nombrecategoria));
		}
		
	}
	
	public function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
