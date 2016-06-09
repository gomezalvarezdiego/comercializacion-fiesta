<?php
App::uses('AppController', 'Controller');
/**
 * Inscriptions Controller
 *
 * @property Inscription $Inscription
 * @property PaginatorComponent $Paginator
 */
class InscriptionsController extends AppController {

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
		$this->Inscription->recursive = 0;
		$this->set('inscriptions', $this->Paginator->paginate());
	}
	
	
	public function principal() {
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'option'));
		}
	}
	
	
	public function option() {
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function find() {
		if ($this->request->is('post')) {
			$nit= $this->request->data['Inscription']['busqueda'];
			return $this->redirect(array('controller' => 'Inscriptions', 'action' => 'index_inscription',$nit));
		}
	}
	
	public function attached_add($nit=null) {
		
		if ($this->request->is('post')) {
			$this->Inscription->create();
		}

	
		}
		/*
		if ($this->request->is('post')) {
			$adjunto1= $this->request->data['Inscription']['attached1'];
			$adjunto2= $this->request->data['Inscription']['attached2'];
			$adjunto3= $this->request->data['Inscription']['attached3'];
			$dir= $this->request->data['Inscription']['dir'];
			
			$this->set('adjunto1',$adjunto1);
			$this->set('adjunto2',$adjunto2);
			$this->set('adjunto3',$adjunto3);
			$this->set('dir',$dir);
			$this->set('nit',$nit);
			
			$adjuntoarchivos=$this->Inscription->query("update inscriptions set attached1='$adjunto1',attached2='$adjunto2',attached3='$adjunto3',dir='$dir' where nit='$nit'");
			
		}
	}*/
	
	public function index_inscription($nitc = null,$ciudad = null ,$idcategorian = null,$razon_social= null,$digitovers=null) {
		
		if($nit==''){
			return $this->redirect(array('controller' => 'Categories', 'action' => 'addcategory'));
		}
		
	$horas_diferencia= -7;
	$tiempo=time() + ($horas_diferencia * 60 *60);
	list($Mili, $bot) = explode(" ", microtime());
	$DM=substr(strval($Mili),2,4);
	$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
	$this->set('fecha',$fecha);
		
		
	$this->set('nit',$nit);
	$this->set('ciudad',$ciudad);
	$this->set('idcategorian',$idcategorian);
	$this->set('razon_social',$razon_social);
	//$this->set('digitover',$digitover);
	
	//$digitovers=$nit.'-'.$digitover;
	$this->set('digitovers',$digitovers);
	
	$compciudad='Bello';
	$this->set('compciudad',$compciudad);
	
	$selecciudad=$this->Inscription->query("select distinct city_name from city where city_name='$ciudad' and city_state='Reserva'");
	$this->set('selecciudad',$selecciudad);
	
	/*
	if(($compciudad	== 'Medellin') || ($compciudad==  'Bogota')){
	$condciudad='hola';
	}
	else{
	
		$condciudad='nola';	
	}*/
	
	//$this->set('condciudad',$condciudad);
	/*$i=0;
	foreach ($selecciudad as $condition){
	
		if ($i<1)
			$condciudad="(".$compciudad."=='".$condition['city']['city_name']."'";
		if ($i>=1)
			$condciudad=$condciudad.") 0R (".$compciudad."=='".$condition['city']['city_name']."'";
			$i++;
		}	
		$condciudad=$condciudad.")";
			//$querya=$querya.")";
		$this->set('condciudad',$condciudad);
*/ 
	   	/*Este condicional lo agregue para que funcionara el buscar nit*/
		if($idcategorian!=''){
			if($selecciudad!=array())
			{
				$actualizacion=$this->Inscription->query("update date set inscription_id ='$nit' where category_id='$idcategorian' and inscription_id='0' and date_state='Reservado' ORDER BY id_date asc LIMIT 1");	
			}
			else{
				
				$actualizacion=$this->Inscription->query("update date set inscription_id ='$nit' where category_id='$idcategorian' and inscription_id='0' and date_state='Disponible' ORDER BY id_date asc LIMIT 1");
				
			}
		}
		else{	
			$razonsoc=$this->Inscription->query("select company_name from inscriptions where nit='$nit'");
			
			$razon_social = '';
			foreach ($razonsoc as $razonsoci):
			$razon_social  = $razonsoci['inscriptions']['company_name'];
			endforeach;
			
			$this->set('razon_social',$razon_social);
					
		}	

		
		$citacion=$this->Inscription->query("select distinct date_name from date where inscription_id='$nit'");
			
		$citacionn = '';
		foreach ($citacion as $citaciones):
		$citacionn  = $citaciones['date']['date_name'];
		endforeach;
			
		$this->set('citacionn',$citacionn);
	}
	
	
	public function view($id = null) {
		if (!$this->Inscription->exists($id)) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		$options = array('conditions' => array('Inscription.' . $this->Inscription->primaryKey => $id));
		$this->set('inscription', $this->Inscription->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($nombrecategoria = null) {
		if($nombrecategoria==''){
			return $this->redirect(array('controller' => 'Categories', 'action' => 'addcategory'));
		}
		$idcategoria=$this->Inscription->query("select distinct id_category from category where category_name='$nombrecategoria'");
		
		foreach ($idcategoria as $idcategorias){
			$idcategorian=$idcategorias['category']['id_category'];
		}
		$this->set('idcategorian',$idcategorian);
		
		$listadociudad=$this->Inscription->query("select distinct city_name from city order by city_name asc");
		
		$listadociudadesn='';
		
		foreach ($listadociudad as $listadociudades):
		$listadociudadesn = $listadociudadesn.'<option value="'.$listadociudades['city']['city_name'].'">'.$listadociudades['city']['city_name'].'</option>';
		endforeach;
		
		$this->set('listadociudadesn',$listadociudadesn);
		
		if ($this->request->is('post')) {
			$this->Inscription->create();
			$nit= $this->request->data['Inscription']['nit'];	
			$digitover= $this->request->data['Inscription']['digitoverificacion'];
			$nitc=$nit.'-'.$digitover;
			$representative_city=$this->request->data['Inscription']['representative_city'];
			$company_name=$this->request->data['Inscription']['company_name'];
			$trade_name=$this->request->data['Inscription']['trade_name'];
			$representative_name=$this->request->data['Inscription']['representative_name'];
			$representative_document=$this->request->data['Inscription']['representative_document'];
			$representative_phone=$this->request->data['Inscription']['representative_phone'];
			$representative_cellphone=$this->request->data['Inscription']['representative_cellphone'];
			$representative_mail=$this->request->data['Inscription']['representative_mail'];
			$contact_name=$this->request->data['Inscription']['contact_name'];
			$contact_document=$this->request->data['Inscription']['contact_document'];
			$contact_city=$this->request->data['Inscription']['contact_city'];
			$contact_phone=$this->request->data['Inscription']['contact_phone'];
			$cellphone=$this->request->data['Inscription']['cellphone'];
			$contanct_mail=$this->request->data['Inscription']['contanct_mail'];
			//$attached1=$this->request->data['Inscription']['attached1'];
			//$attached2=$this->request->data['Inscription']['attached2'];
			//$attached3=$this->request->data['Inscription']['attached3'];
			//$dir='hbos';
			$insertinsrip=$this->Inscription->query( "INSERT INTO inscriptions (nit,company_name,representative_name,representative_document,representative_city,representative_phone,representative_cellphone,representative_mail,trade_name,contact_name,contact_document,contact_city,contact_phone,cellphone,contanct_mail) VALUES ('$nitcs', '$representative_city','$company_name','$trade_name', '$representative_name', '$representative_document','$representative_phone', '$representative_cellphone', '$representative_mail','$contact_name','$contact_document','$contact_city','$contact_phone','$cellphone','$contanct_mail');");
			$this->set('insertinsrip',$insertinsrip);
			
			if ($insertinsrip==array()) {		
				$this->Session->setFlash(__('The inscription has been saved.'));
				//$nit= $this->request->data['Inscription']['nit'];
				$ciudad= $this->request->data['Inscription']['representative_city'];
				$razon_social= $this->request->data['Inscription']['company_name'];
				//$digitovers=$nit.'-'.$digitover;
				return $this->redirect(array('action' => 'index_inscription',$nitc,$ciudad,$idcategorian,$razon_social));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
				print_r($insertinsrip);
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
		if (!$this->Inscription->exists($id)) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inscription.' . $this->Inscription->primaryKey => $id));
			$this->request->data = $this->Inscription->find('first', $options);
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
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Inscription->delete()) {
			$this->Session->setFlash(__('The inscription has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inscription could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
